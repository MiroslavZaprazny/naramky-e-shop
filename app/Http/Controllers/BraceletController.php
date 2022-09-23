<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBraceletRequest;
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

    public function create()
    {
        return view('bracelets.create');
    }

    public function store(StoreBraceletRequest $request)
    {
        $bracelet = Bracelet::create([
            'title' => $request->input('title'),
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        return redirect(route('admin.index'));
    }
}
