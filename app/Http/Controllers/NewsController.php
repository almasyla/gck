<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
	public function index()
	{
		$news = News::orderBy('id','desc')->get();
    	return view('news',compact('news'));
	}
	public function show($id)
	{
		$news = News::find($id);
		return  view('news_content',compact('news'));
	}
}
