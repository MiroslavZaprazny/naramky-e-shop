<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BraceletController extends Controller
{
    public function index()
    {
        return view('bracelets.index');
    }
}
