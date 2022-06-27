<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $blog = DB::table('blog')->get();
        $faqs = DB::table('faq')->get();
        $gallery = DB::table('gallery')->get();

        return view('admin.dashboard',['blog'=>$blog,'gallery'=>$gallery,'faqs'=>$faqs]);
    }
}
