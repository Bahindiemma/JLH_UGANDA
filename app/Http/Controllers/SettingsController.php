<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $settingsImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $settingsImage);
            $input['image'] = "$settingsImage";
        }
        Settings::create($input);
        return redirect()->route('settings.index')
            ->with('success', 'settings created successfully.');
    }

    public function show(Settings $settings)
    {
        return view('admin.settings.index', compact('settings'));
    }

    public function edit(Settings $settings)
    {
        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request, Settings $settings)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $settingsImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $settingsImage);
            $input['image'] = "$settingsImage";
        } else {
            unset($input['image']);
        }

        $settings->update($input);
        
        return redirect()->route('settings.index')
            ->with('success', 'settings updated successfully.');
    }

    public function destroy(Settings $photo)
    {
        $photo->delete();
        return redirect()->route('settings.index')
            ->with('success', 'settings deleted successfully');
    }
}
