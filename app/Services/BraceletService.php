<?php

namespace App\Services;

use App\Models\Bracelet;
use Illuminate\Http\Request;
use App\Models\BraceletImage;

class BraceletService
{
    public function createBracelet(Request $request)
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
            'qty_in_stock' => $request->input('qty_in_stock')
        ]);

        foreach ($request->file('pictures') as $picture) {
            $thumbnailName =  $picture->getClientOriginalName();
            $picture->move(public_path() . '/images/bracelet-imgs', $thumbnailName);

            BraceletImage::create([
                'bracelet_id' => $bracelet->id,
                'filename' => $thumbnailName
            ]);
        }
    }
}
