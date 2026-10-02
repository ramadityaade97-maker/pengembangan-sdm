<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

/**
 * Creates a login for the collaboration inbox, or resets an existing one.
 *
 * This exists because public registration was removed: with it in place anyone
 * could create an account and read the submitted names, email addresses and
 * phone numbers.
 */
class MakeInboxUser extends Command
{
    protected $signature = 'inbox:user
                            {--email= : Login email address}
                            {--name= : Display name}
                            {--password= : Set the password directly instead of being prompted}
                            {--reset : Update the password of an account that already exists}';

    protected $description = 'Create or reset an account that can sign in to the collaboration inbox at /pengajuan';

    /**
     * Minimum the reset-password form also enforces, so a password set here
     * cannot be one the form would later reject.
     */
    private const MIN_LENGTH = 12;

    public function handle(): int
    {
        $email = trim((string) $this->option('email'));

        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error('Email wajib diisi dan harus valid.');
            $this->line('  Contoh: php artisan inbox:user --email=nama@contoh.go.id');

            return self::FAILURE;
        }

        $existing = User::where('email', $email)->first();

        if ($existing && ! $this->option('reset')) {
            $this->error("Akun {$email} sudah ada.");
            $this->line('  Untuk mengganti kata sandinya:');
            $this->line("    php artisan inbox:user --email={$email} --reset");

            return self::FAILURE;
        }

        $password = $this->resolvePassword();
        if ($password === null) {
            return self::FAILURE;
        }

        if ($existing) {
            $existing->forceFill(['password' => Hash::make($password)])->save();

            $this->info("Kata sandi untuk {$email} diperbarui.");
            $this->line('  Masuk di: /login');
            $this->line('  Daftar pengajuan di: /pengajuan');

            return self::SUCCESS;
        }

        User::create([
            'name' => (string) ($this->option('name') ?: 'Pengelola'),
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info("Akun dibuat untuk: {$email}");
        $this->line('  Masuk di: /login');
        $this->line('  Daftar pengajuan di: /pengajuan');
        $this->newLine();
        $this->line('  Untuk menggantinya nanti:');
        $this->line("    php artisan inbox:user --email={$email} --reset");

        return self::SUCCESS;
    }

    /**
     * Returns the password, or null when the user could not or would not supply
     * one.
     */
    private function resolvePassword(): ?string
    {
        $fromOption = (string) ($this->option('password') ?? '');

        if ($fromOption !== '') {
            $this->warn('Kata sandi yang diketik di baris perintah tersimpan di riwayat shell.');
            $this->line('  Untuk lebih aman, jalankan tanpa --password lalu ketik saat diminta.');

            return $this->validate($fromOption);
        }

        if (! $this->input->isInteractive()) {
            $this->error('Butuh kata sandi. Tambahkan --password=... saat menjalankan non-interaktif.');

            return null;
        }

        $this->line('');
        $this->line("Kata sandi minimal ".self::MIN_LENGTH." karakter.");
        $this->line('Ketik dua kali untuk konfirmasi. Input tidak akan ditampilkan.');

        // secret() reads without echoing, so the password never appears on screen.
        $first = (string) $this->secret('Kata sandi');
        $second = (string) $this->secret('Ulangi kata sandi');

        // secret() needs a real terminal. When input is piped or redirected it
        // returns an empty string rather than reading, so say that plainly
        // instead of reporting a mismatch between two empty answers.
        if (trim($first) === '' || trim($second) === '') {
            $this->error('Tidak ada input yang terbaca.');
            $this->line('  Jalankan perintah ini di terminal interaktif, bukan dengan input yang dialirkan.');
            $this->line('  Untuk non-interaktif, pakai: --password=...');

            return null;
        }

        if ($first !== $second) {
            $this->error('Dua kata sandi tidak sama. Ulangi.');

            return null;
        }

        return $this->validate($first);
    }

    private function validate(string $password): ?string
    {
        $validator = Validator::make(
            ['password' => $password],
            ['password' => ['required', 'string', Password::min(self::MIN_LENGTH)]],
            [
                'password.required' => 'Kata sandi wajib diisi.',
                'password.min' => 'Kata sandi minimal '.self::MIN_LENGTH.' karakter.',
            ]
        );

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $message) {
                $this->error($message);
            }

            return null;
        }

        return $password;
    }
}
