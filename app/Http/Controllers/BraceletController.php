<?php

namespace App\Http\Controllers;

use App\Models\Bracelet;
use Illuminate\Http\Request;

class BraceletController extends Controller
{
    public function index()
    {
        return view('bracelets.index');
    }

    public function show(Bracelet $bracelet)
    {
        return view('bracelets.show');
    }
}
