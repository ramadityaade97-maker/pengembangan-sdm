<?php

namespace Tests\Feature;

use App\Models\CollaborationRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CollaborationFormTest extends TestCase
{
    use RefreshDatabase;

    private const VALID = [
        'name' => 'Rina Wulandari',
        'organisation' => 'Dinas SDM Kota Denpasar',
        'email' => 'rina@contoh.go.id',
        'phone' => '08123456789',
        'message' => 'Kami membutuhkan Diklat Jabatan untuk 40 aparatur pada kuartal depan.',
    ];

    public function test_the_form_page_renders_with_every_field_labelled(): void
    {
        $response = $this->get('/kolaborasi');

        $response->assertOk();
        $response->assertSee('Ajukan Kolaborasi', escape: false);

        $html = $response->getContent();

        foreach (['name', 'organisation', 'email', 'phone', 'message'] as $field) {
            $this->assertStringContainsString(
                '<label for="'.$field.'">',
                $html,
                "field {$field} has no label"
            );
        }
    }

    public function test_a_valid_submission_is_stored_and_confirmed(): void
    {
        $response = $this->post('/kolaborasi', self::VALID);

        $response->assertRedirect(route('kolaborasi'));
        $this->assertDatabaseHas('collaboration_requests', [
            'name' => self::VALID['name'],
            'organisation' => self::VALID['organisation'],
            'email' => self::VALID['email'],
        ]);

        $this->assertSame(1, CollaborationRequest::count());
    }

    public function test_the_confirmation_does_not_promise_an_email_reply_time(): void
    {
        // The site has no working mail transport, so any "we reply within N
        // hours" line would be a promise the system cannot keep.
        $this->post('/kolaborasi', self::VALID);

        $html = $this->get('/kolaborasi')->getContent();

        foreach (['1x24', '24 jam', '2x24', '48 jam', 'sehari', 'kami akan emailing'] as $promise) {
            $this->assertStringNotContainsString($promise, $html);
        }
    }

    public function test_the_confirmation_names_a_real_contact_route(): void
    {
        $this->post('/kolaborasi', self::VALID);

        $html = $this->get('/kolaborasi')->getContent();

        $this->assertStringContainsString('mailto:halo@denpasarinstitute.com', $html);
        $this->assertStringContainsString('tel:+62218189896', $html);
    }

    public function test_an_empty_submission_is_rejected_and_stores_nothing(): void
    {
        $response = $this->post('/kolaborasi', []);

        $response->assertSessionHasErrors(['name', 'organisation', 'email', 'message']);
        $this->assertSame(0, CollaborationRequest::count());
    }

    public function test_a_malformed_email_is_rejected(): void
    {
        $this->post('/kolaborasi', array_merge(self::VALID, ['email' => 'bukan-email']))
            ->assertSessionHasErrors('email');

        $this->assertSame(0, CollaborationRequest::count());
    }

    public function test_a_too_short_message_is_rejected(): void
    {
        $this->post('/kolaborasi', array_merge(self::VALID, ['message' => 'pendek']))
            ->assertSessionHasErrors('message');

        $this->assertSame(0, CollaborationRequest::count());
    }

    public function test_the_phone_is_optional(): void
    {
        $payload = self::VALID;
        unset($payload['phone']);

        $this->post('/kolaborasi', $payload)->assertSessionHasNoErrors();

        $this->assertNull(CollaborationRequest::first()->phone);
    }

    public function test_the_honeypot_drops_the_row_but_reports_success(): void
    {
        $this->post('/kolaborasi', array_merge(self::VALID, ['website' => 'http://spam.example']))
            ->assertRedirect(route('kolaborasi'))
            ->assertSessionHas('status', 'sent');

        $this->assertSame(0, CollaborationRequest::count(), 'a filled honeypot must not be stored');
    }

    public function test_the_id_field_cannot_be_mass_assigned(): void
    {
        $this->post('/kolaborasi', array_merge(self::VALID, [
            'id' => 9999,
            'created_at' => '1999-01-01 00:00:00',
        ]));

        $stored = CollaborationRequest::first();

        $this->assertNotNull($stored);
        $this->assertNotSame(9999, $stored->id);
    }

    public function test_a_submission_is_accepted_again_after_a_refresh_redirect(): void
    {
        // Post/Redirect/Get: following the redirect must show the notice and the
        // form must not be pre-filled from the previous submission.
        $this->post('/kolaborasi', self::VALID)->assertRedirect(route('kolaborasi'));

        $html = $this->get('/kolaborasi')->getContent();

        $this->assertStringContainsString('Pengajuan Anda sudah tercatat', $html);
        $this->assertStringNotContainsString('Rina Wulandari', $html);
        $this->assertStringNotContainsString('<form', $html);
    }
}
