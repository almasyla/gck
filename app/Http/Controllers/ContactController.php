<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    public function show()
    {
    	return view('contact');
    }
    public function sendEmail()
    {
    	$data = \Request::all();
 
            $m->from($data['email'], '');
            $m->to('hello@girlscodingkosova.org','')->subject($data['reason']);
        });

        return view('contact');	
    }
}
