<?php

namespace App\Http\Controllers;
use App\Models\{Settings,Gallery};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class websiteContactController extends Controller
{
    public function index()
    {
        // $settings = Settings::all();
        // $data = Gallery::all()->union($settings);
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.index', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function about()
    {
        // $settings = Settings::all();
        // $data = Gallery::all()->union($settings);
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.about', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function blog()
    {
        // $settings = Settings::all();
        // $data = Gallery::all()->union($settings);
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.blog', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function contact()
    {
        // $settings = Settings::all();
        // $data = Gallery::all()->union($settings);
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.contact', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function gallery()
    {
        // $settings = Settings::all();
        // $data = Gallery::all()->union($settings);
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.gallery', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function services()
    {
        // $settings = Settings::all();
        // $data = Gallery::all()->union($settings);
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.services', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }

}
