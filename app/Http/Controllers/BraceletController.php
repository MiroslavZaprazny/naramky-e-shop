<?php

namespace App\Http\Controllers;

use App\Models\Bracelet;

class BraceletController extends Controller
{
    public function index()
    {
        return view('bracelets.index');
    }

    public function show(Bracelet $bracelet)
    {
        $bracelet->load('images');

        return view('bracelets.show', [
            'bracelet' => $bracelet
        ]);
    }
}
