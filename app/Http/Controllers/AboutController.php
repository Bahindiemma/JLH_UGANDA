<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/about/';
            $aboutImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $aboutImage);
            $input['image'] = "$aboutImage";
        }
        About::create($input);
        return redirect()->route('about.index')
            ->with('success', 'about created successfully.');
    }

    public function show(About $about)
    {
        return view('admin.about.index', compact('about'));
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/about/';
            $aboutImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $aboutImage);
            $input['image'] = "$aboutImage";
        } else {
            unset($input['image']);
        }

        $about->update($input);

        return redirect()->route('about.index')
            ->with('success', 'about updated successfully.');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')
            ->with('success', 'about deleted successfully');
    }
}
