<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Exception;

class GalleryController extends Controller
{
    public function index()
    {
        $photo = Gallery::all();
        return view('admin.gallery.index', compact('photo'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            //            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/gallery/';
            $galleryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $galleryImage);
            $input['image'] = "$galleryImage";
        }
        Gallery::create($input);
        return redirect()->route('photos.index')
            ->with('success', 'photo created successfully.');
    }

    public function show(Gallery $photo)
    {
        return view('admin.gallery.index', compact('photo'));
    }

    public function edit(Gallery $photo)
    {
        return view('admin.gallery.edit', compact('photo'));
    }

    public function update(Request $request, Gallery $photo)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/gallery/';
            $galleryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $galleryImage);
            $input['image'] = "$galleryImage";
        } else {
            unset($input['image']);
        }

        $photo->update($input);
        return redirect()->route('photos.index')
            ->with('success', 'photo updated successfully.');
    }

    public function destroy(Gallery $photo)
    {
        $photo->delete();
        return redirect()->route('photos.index')
            ->with('success', 'photo deleted successfully');
    }
}
