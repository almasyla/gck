<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Events;

class EventsController extends Controller
{
    public function index()
    {
    	$events = Events::orderBy('id','DESC')->get();
    	return view('events',compact('events'));
    }
    public function show($id)
	{
		$events = Events::find($id);
		return  view('events_content',compact('events'));
	}
}
