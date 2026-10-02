<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Static program pages.
 *
 * These live in a controller rather than as closures in routes/web.php so the
 * route definitions stay serialisable, which is what `route:cache` needs in
 * production. Closure routes silently break every URL once routes are cached.
 */
class PageController extends Controller
{
    public function welcome(): View
    {
        return view('welcome');
    }

    public function sop(): View
    {
        return view('sop');
    }

    public function interview(): View
    {
        return view('interview');
    }

    public function diklat(): View
    {
        return view('diklat');
    }

    public function lokakarya(): View
    {
        return view('lokakarya');
    }

    public function training(): View
    {
        return view('training');
    }

    public function sdm(): View
    {
        return view('sdm');
    }

    public function tailor(): View
    {
        return view('tailor');
    }

    public function karierDosenLama()
    {
        return to_route('karir-dosen', [], 301);
    }

    public function karirDosen(): View
    {
        return view('karir-dosen');
    }
}
