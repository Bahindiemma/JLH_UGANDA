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
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.index', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function about()
    {
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.about', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function blog()
    {

        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.blog', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function contact()
    {
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.contact', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function gallery()
    {
      
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.gallery', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }
    public function services()
    {
        $about = DB::table('about')->get();
        $blog = DB::table('blog')->get();
        $settings = DB::table('settings')->get();
        $gallery = DB::table('gallery')->get();

        return view('website.services', ['blog'=>$blog,'settings' => $settings, 'gallery' => $gallery,'about'=>$about ]);

    }

}
