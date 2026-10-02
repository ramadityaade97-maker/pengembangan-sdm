<?php

namespace App\Http\Controllers;

use App\Models\CollaborationRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * The collaboration inbox.
 *
 * Behind the auth middleware, so it is not reachable without an account. The
 * account list is deliberately closed: there is no public registration, and
 * accounts are made from the command line.
 *
 * The route also carries the password.confirm middleware, so the password has to
 * be re-entered every time this page is opened. index() consumes that
 * confirmation once the page has been served, which is what makes it "every
 * time" rather than "every few hours".
 */
class CollaborationInboxController extends Controller
{
    public function index(Request $request): View
    {
        $view = view('pengajuan', [
            'requests' => CollaborationRequest::latest()->get(),
            'total' => CollaborationRequest::count(),
        ]);

        // One confirmation buys one visit. Without this the password.confirm
        // timer would decide how often the user is asked, and setting that timer
        // to zero to get "every time" puts the user in a redirect loop: the
        // confirmation is stamped, the clock ticks one second, and the next
        // request bounces straight back to the confirm screen.
        //
        // Clearing it here means the flag is always spent by the time the next
        // navigation happens, so there is no timer to get wrong.
        $request->session()->forget('auth.password_confirmed_at');

        return $view;
    }
}
