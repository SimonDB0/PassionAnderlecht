<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Galerie;

class HomeController extends Controller
{
    public function index()
    {
        $photos = Galerie::all();
        return Inertia::render('Welcome', [
            'photos' => $photos,
            'auth' => auth()->user(),
        ]);
    }
}
