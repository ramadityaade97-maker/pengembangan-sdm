<?php

namespace Tests\Feature;

use App\Models\CollaborationRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

/**
 * The inbox asks for the password on every single visit, not on a timer.
 */
class InboxPasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    private function user(): User
    {
        return User::factory()->create(['password' => bcrypt('password')]);
    }

    private function confirm(): void
    {
        $this->post('/confirm-password', ['password' => 'password'])
            ->assertRedirect(route('pengajuan'));
    }

    public function test_a_signed_in_user_is_stopped_at_the_password_prompt(): void
    {
        $user = $this->user();

        // Signed in, but the password has not been re-entered yet.
        $this->actingAs($user)
            ->get('/pengajuan')
            ->assertRedirect(route('password.confirm'));
    }

    public function test_confirming_the_password_opens_the_inbox(): void
    {
        $user = $this->user();
        $this->actingAs($user);
        CollaborationRequest::create([
            'name' => 'Rina Wulandari',
            'organisation' => 'Dinas SDM',
            'email' => 'rina@contoh.go.id',
            'message' => 'Perlu Diklat Jabatan untuk 40 aparatur.',
        ]);

        $this->confirm();

        $this->get('/pengajuan')
            ->assertOk()
            ->assertSee('Rina Wulandari');
    }

    public function test_the_inbox_asks_again_on_the_next_visit(): void
    {
        $user = $this->user();
        $this->actingAs($user);

        $this->confirm();
        $this->get('/pengajuan')->assertOk();

        // Second visit without re-entering the password.
        $this->get('/pengajuan')
            ->assertRedirect(route('password.confirm'));
    }

    public function test_there_is_no_redirect_loop(): void
    {
        $user = $this->user();
        $this->actingAs($user);

        // Walk the whole cycle five times. If the confirmation were timer based
        // with a zero timeout, the second leg would bounce back to the prompt
        // forever and this would never reach the inbox.
        for ($i = 0; $i < 5; $i++) {
            $this->get('/pengajuan')
                ->assertRedirect(route('password.confirm'));

            $this->confirm();

            $this->get('/pengajuan')->assertOk();
        }
    }

    public function test_a_wrong_password_does_not_unlock_the_inbox(): void
    {
        $user = $this->user();
        $this->actingAs($user);
        CollaborationRequest::create([
            'name' => 'Rahasia',
            'email' => 'rahasia@contoh.go.id',
            'organisation' => 'X',
            'message' => 'Isi yang tidak boleh terbaca tanpa password.',
        ]);

        $this->post('/confirm-password', ['password' => 'salah-sekali'])
            ->assertSessionHasErrors('password');

        $this->get('/pengajuan')
            ->assertRedirect(route('password.confirm'));
    }

    public function test_the_prompt_never_shows_the_submissions(): void
    {
        $user = $this->user();
        $this->actingAs($user);
        CollaborationRequest::create([
            'name' => 'Rahasia',
            'email' => 'rahasia@contoh.go.id',
            'organisation' => 'X',
            'message' => 'Isi yang tidak boleh terbaca tanpa password.',
        ]);

        $response = $this->get('/pengajuan');
        $response->assertRedirect(route('password.confirm'));
        $this->assertStringNotContainsString('Rahasia', $response->getContent());
        $this->assertStringNotContainsString('rahasia@contoh.go.id', $response->getContent());

        // And the prompt screen itself must not leak either.
        $prompt = $this->get('/confirm-password');
        $prompt->assertOk();
        $this->assertStringNotContainsString('Rahasia', $prompt->getContent());
    }

    public function test_a_guest_still_goes_to_login_not_the_password_prompt(): void
    {
        $this->get('/pengajuan')->assertRedirect(route('login'));
    }

    public function test_signing_in_still_lands_on_the_prompt_first(): void
    {
        $this->user();

        $this->post('/login', [
            'email' => $this->user()->email,
            'password' => 'password',
        ]);

        // Logging in is not enough; the password still has to be confirmed.
        $this->get('/pengajuan')->assertRedirect(route('password.confirm'));
    }
}
