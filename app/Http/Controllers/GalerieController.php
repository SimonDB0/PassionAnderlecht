<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GalerieController extends Controller
{
    public function index()
    {
        $galeries = Galerie::all();
        return Inertia::render('Welcome', ['galeries' => $galeries]);
    }
}
