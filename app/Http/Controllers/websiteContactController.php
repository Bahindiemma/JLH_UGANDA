<?php

namespace App\Http\Controllers;
use App\Models\{Settings,Gallery};
use Illuminate\Http\Request;

class websiteContactController extends Controller
{
    public function index()
    {
        $settings = Settings::all();

        return view('website.contact', compact('settings'));

    }

}
