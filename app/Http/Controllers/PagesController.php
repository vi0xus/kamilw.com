<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function resume()
    {
    	return view('about.resume');
    }

    public function about()
    {
    	return view('about.index');
    }
    
    public function contact()
    {
    	return view('contact.index');
    }

    public function blog()
    {
    	return view('blog.index');
    }

    public function art()
    {
    	return view('art.index');
    }

}
