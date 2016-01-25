<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SendMessageEmailRequest;
use App\Http\Requests\SendProjectEmailRequest;

use Flash;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function __construct()
    {
    	// 
    }

    public function message()
    {
    	return view('contact.message');
    }

    public function sendMessage(SendMessageEmailRequest $request)
    {
    	Flash::error('Your message was NOT sent.');

    	return redirect()->route('contact.message_success');
    }

    public function project()
    {
    	return view('contact.project');
    }

    public function sendProject(SendProjectEmailRequest $request)
    {
    	Flash::error('Your message was NOT sent.');

    	return redirect()->route('contact.project_success');
    }

    private function sendEmail($data)
    {
    	// 
    }
}
