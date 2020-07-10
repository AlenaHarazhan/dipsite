<?php

namespace App\Http\Controllers;

use App\Gallery;


class GalleryController extends Controller
{
    public function getOne($id = null) {
        $obj=Gallery::find($id);
        $my=$_SERVER['REQUEST_URI'];
        $my_arr=explode('/', $my);
        $my_id=end($my_arr);
        $gallerys=Gallery::all();
        return view('gallery', compact('obj', 'my_id', 'gallerys'));
    }
}
