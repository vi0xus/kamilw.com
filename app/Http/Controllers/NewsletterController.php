<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Flash;

use App\Http\Requests\NewsletterSignupRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function signup(NewsletterSignupRequest $request)
    {
    	Flash::error('Your email has NOT been signed up.');

    	return redirect()->route('index');
    }
}
