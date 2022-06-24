<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'shortText' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/services/';
            $serviceImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $serviceImage);
            $input['image'] = "$serviceImage";
        }

        Service::create($input);

        return redirect()->route('services.index')
            ->with('success', 'services created successfully.');
    }

    public function show(Service $services)
    {
        return view('admin.service.index', compact('services'));
    }

    public function edit(Service $services)
    {
        return view('admin.service.edit', compact('services'));
    }

    public function update(Request $request, Service $services)
    {
        $request->validate([
            'title' => 'required',
            'shortText' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/services/';
            $serviceImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $serviceImage);
            $input['image'] = "$serviceImage";
        } else {
            unset($input['image']);
        }

        $services->update($input);
        
        return redirect()->route('services.index')
            ->with('success', 'service updated successfully.');
    }

    public function destroy(Service $services)
    {
        $services->delete();
        return redirect()->route('services.index')
            ->with('success', 'service deleted successfully');
    }
}
