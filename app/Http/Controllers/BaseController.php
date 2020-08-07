<?php

namespace App\Http\Controllers;
use App\Maintext;
use App\Gallery;
use App;

class BaseController extends Controller
{
    public function getIndex(){
    $gallerys = Gallery::all();
    //dd(App::getLocale());
    return view('welcome', compact('gallerys'));
    }
    public function getUrl($url=null){
    $page=Maintext::where('url', $url)->first();
    if(App::getLocale()=='ru'){
        $body=$page->body_ru;
        $smallbody=$page->smallbody_ru;
    } else {
        $body=$page->body;
        $smallbody=$page->smallbody;
    }
    return view('page', compact('page', 'body', 'smallbody'));
    }
}
