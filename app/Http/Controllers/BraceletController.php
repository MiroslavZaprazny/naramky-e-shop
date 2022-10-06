<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBraceletRequest;
use App\Http\Requests\UpdateBraceletRequest;
use App\Models\Bracelet;
use App\Services\BraceletService;
use Illuminate\Http\Request;

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

    public function store(StoreBraceletRequest $request, BraceletService $braceletService)
    {
        $braceletService->createBracelet($request);

        return redirect(route('admin.index'));
    }

    public function edit(Bracelet $bracelet)
    {
        $bracelet->load('images');

        return view('bracelets.edit', [
            'bracelet' => $bracelet
        ]);
    }

    public function update(Bracelet $bracelet, UpdateBraceletRequest $request)
    {
        $bracelet->update($request->validated());

        return redirect('/admin-panel');
    }

    public function destroy(Request $request)
    {
        Bracelet::findOrFail($request->input('id'))->delete();

        return redirect('/admin-panel');
    }
}
