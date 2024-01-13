<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\TopDestination;

class WebsiteFrontController extends Controller
{
    public function home()
    {
        $destinations = TopDestination::latest()->take(6)->get();
        $blogs = Blog::latest()->take(4)->get();
        return view('website.home',compact('destinations','blogs'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }
}
