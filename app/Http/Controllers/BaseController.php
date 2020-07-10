<?php

namespace App\Http\Controllers;
use App\Maintext;
use App\Gallery;

class BaseController extends Controller
{
    public function getIndex(){
    $gallerys = Gallery::all();
    return view('welcome', compact('gallerys'));
    }
    public function getUrl($url=null){
    $page=Maintext::where('url', $url)->first();
    return view('page', compact('page'));
    }
}
