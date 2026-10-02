<?php

namespace App\Http\Controllers;

use App\Models\CollaborationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * The collaboration request form at /kolaborasi.
 *
 * Submissions are stored in the collaboration_requests table. This site has no
 * working mail transport, so the table is the real destination and the
 * confirmation wording deliberately avoids promising an email reply.
 */
class CollaborationController extends Controller
{
    public function form(): View
    {
        return view('kolaborasi');
    }

    public function submit(Request $request): RedirectResponse
    {
        // Honeypot. The field is hidden from people and from screen readers, so
        // only an automated filler reaches it. Filled means a bot, and the
        // request is dropped without being stored.
        //
        // The redirect still reports success on purpose: a bot that is told it
        // was detected learns to try a different field name, and a real person
        // can never end up on this branch, so nobody is misled.
        if ($request->filled('website')) {
            return redirect()
                ->route('kolaborasi')
                ->with('status', 'sent');
        }

        $data = $request->validate(
            [
                'name' => ['required', 'string', 'max:120'],
                'organisation' => ['required', 'string', 'max:160'],
                'email' => ['required', 'string', 'email', 'max:190'],
                'phone' => ['nullable', 'string', 'max:40'],
                'message' => ['required', 'string', 'min:20', 'max:5000'],
            ],
            [
                'name.required' => 'Tuliskan nama Anda.',
                'name.max' => 'Nama maksimal 120 karakter.',
                'organisation.required' => 'Tuliskan nama organisasi atau instansi Anda.',
                'organisation.max' => 'Nama organisasi maksimal 160 karakter.',
                'email.required' => 'Tuliskan alamat email Anda.',
                'email.email' => 'Alamat email belum valid.',
                'email.max' => 'Alamat email maksimal 190 karakter.',
                'phone.max' => 'Nomor telepon maksimal 40 karakter.',
                'message.required' => 'Tuliskan ringkasan kebutuhan Anda.',
                'message.min' => 'Ringkasan kebutuhan minimal 20 karakter agar bisa kami pahami.',
                'message.max' => 'Ringkasan kebutuhan maksimal 5000 karakter.',
            ]
        );

        CollaborationRequest::create($data + [
            'source_ip' => $request->ip(),
        ]);

        // Post/Redirect/Get, so a refresh does not re-submit the form.
        return redirect()
            ->route('kolaborasi')
            ->with('status', 'sent');
    }
}
