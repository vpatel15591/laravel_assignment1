<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Portfolio;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $blogs=Blog::latest()->get();
        $portfolios=Portfolio::latest()->get();
       // dd($blogs);
        return view('home',compact('blogs','portfolios'));
    }
    
}
