<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Gallery;


class PageController extends Controller
{
    public function home()
    {
        $content = Page::where('page_name', 'home')->first();
        return view('home', compact('content'));
    }

    public function gallery()
{
    $images = Gallery::all();
    return view('gallery', compact('images'));
}


    public function contact()
    {
        $content = Page::where('page_name', 'contact')->first();
        return view('contact', compact('content'));
    }
}
