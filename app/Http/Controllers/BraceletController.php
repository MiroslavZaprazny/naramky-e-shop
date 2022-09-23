<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBraceletRequest;
use App\Models\Bracelet;
use App\Models\BraceletImage;

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
        $thumbnail = $request->file('thumbnail');

        $thumbnailName = $thumbnail->getClientOriginalName();
        $thumbnail->move(public_path() . '/images', $thumbnailName);

        $bracelet = Bracelet::create([
            'title' => $request->input('title'),
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
            'thumbnail' => 'images/' . $thumbnailName,
            'price' => $request->input('price'),
        ]);

        foreach ($request->file('pictures') as $picture) {
            $thumbnailName =  $picture->getClientOriginalName();
            $picture->move(public_path() . '/images/bracelet-imgs', $thumbnailName);

            BraceletImage::create([
                'bracelet_id' => $bracelet->id,
                'filename' => $thumbnailName
            ]);
        }

        return redirect(route('admin.index'));
    }
}
