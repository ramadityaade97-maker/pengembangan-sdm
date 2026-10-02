<?php

namespace Tests\Feature;

use App\Models\CollaborationRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CollaborationInboxTest extends TestCase
{
    use RefreshDatabase;

    private function submission(array $overrides = []): CollaborationRequest
    {
        return CollaborationRequest::create(array_merge([
            'name' => 'Rina Wulandari',
            'organisation' => 'Dinas SDM Kota Denpasar',
            'email' => 'rina@contoh.go.id',
            'phone' => '08123456789',
            'message' => 'Kami membutuhkan Diklat Jabatan untuk 40 aparatur.',
        ], $overrides));
    }

    /**
     * Signs in and clears the password confirmation.
     *
     * The inbox requires both: being signed in is not enough, the password has
     * to be re-entered on every visit. The behaviour itself is covered in
     * InboxPasswordConfirmationTest; these tests are about what the inbox shows
     * once you are through.
     */
    private function signedInAndConfirmed(): User
    {
        $user = User::factory()->create(['password' => bcrypt('password')]);
        $this->actingAs($user);
        $this->post('/confirm-password', ['password' => 'password']);

        return $user;
    }

    public function test_the_inbox_redirects_a_guest_to_login(): void
    {
        $this->get('/pengajuan')
            ->assertRedirect(route('login'));
    }

    public function test_the_inbox_never_leaks_data_to_a_guest(): void
    {
        $this->submission();

        $response = $this->get('/pengajuan');

        $response->assertRedirect(route('login'));
        // The body must be the login page, not the inbox.
        $this->assertStringNotContainsString('Rina Wulandari', $response->getContent());
        $this->assertStringNotContainsString('rina@contoh.go.id', $response->getContent());
    }

    public function test_a_signed_in_user_sees_the_submissions(): void
    {
        $this->signedInAndConfirmed();
        $this->submission();

        $response = $this->get('/pengajuan');

        $response->assertOk();
        $response->assertSee('Rina Wulandari');
        $response->assertSee('Dinas SDM Kota Denpasar');
        $response->assertSee('rina@contoh.go.id');
    }

    public function test_an_empty_inbox_says_why_and_where_to_fill_it(): void
    {
        $this->signedInAndConfirmed();

        $response = $this->get('/pengajuan');

        $response->assertOk();
        $response->assertSee('Belum ada pengajuan', escape: false);
        $response->assertSee('/kolaborasi', escape: false);
    }

    public function test_a_missing_phone_is_shown_honestly_not_as_blank(): void
    {
        $this->signedInAndConfirmed();
        $this->submission(['phone' => null]);

        $this->get('/pengajuan')
            ->assertSee('tidak diisi');
    }

    public function test_submissions_are_ordered_newest_first(): void
    {
        $this->signedInAndConfirmed();
        $older = $this->submission(['name' => 'Older', 'email' => 'older@contoh.go.id']);
        $older->forceFill(['created_at' => now()->subDays(3)])->save();

        $this->submission(['name' => 'Newer', 'email' => 'newer@contoh.go.id']);

        $html = $this->get('/pengajuan')->getContent();

        $this->assertLessThan(
            strpos($html, 'Older'),
            strpos($html, 'Newer'),
            'the newer submission must appear before the older one'
        );
    }

    public function test_there_is_no_public_registration_route(): void
    {
        // The inbox holds contact details, so self sign-up must not exist.
        $this->get('/register')->assertNotFound();
        $this->post('/register', [])->assertNotFound();
    }

    public function test_the_inbox_is_not_indexed_by_search_engines(): void
    {
        $this->signedInAndConfirmed();

        $html = $this->get('/pengajuan')->getContent();

        $this->assertStringContainsString('noindex', $html);
    }

    public function test_the_login_page_renders_and_shows_no_registration_link(): void
    {
        $response = $this->get('/login');

        $response->assertOk();

        $html = $response->getContent();
        $this->assertStringNotContainsString('Daftar', $html);
        $this->assertStringNotContainsString('Daftar Akun', $html);
        // No sign-up link of any kind, since the route does not exist.
        $this->assertStringNotContainsString('/register', $html);
    }

    public function test_a_user_can_sign_in_confirm_and_reach_the_inbox(): void
    {
        User::factory()->create([
            'email' => 'petugas@denpasarinstitute.com',
            'password' => bcrypt('password'),
        ]);
        $this->submission();

        $this->post('/login', [
            'email' => 'petugas@denpasarinstitute.com',
            'password' => 'password',
        ])->assertRedirect();

        // Signing in alone does not open the inbox.
        $this->get('/pengajuan')->assertRedirect(route('password.confirm'));

        $this->post('/confirm-password', ['password' => 'password'])->assertRedirect();

        $this->get('/pengajuan')->assertOk()->assertSee('Rina Wulandari');
    }

    public function test_a_bad_password_does_not_sign_anyone_in(): void
    {
        User::factory()->create(['email' => 'petugas@denpasarinstitute.com']);

        $this->post('/login', [
            'email' => 'petugas@denpasarinstitute.com',
            'password' => 'wrong-password',
        ])->assertSessionHasErrors('email');

        $this->get('/pengajuan')->assertRedirect(route('login'));
    }
}
