<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Work;


class GalleryController extends Controller
{
    public function getOne($id = null) {
        $obj=Gallery::find($id);
        $my=$_SERVER['REQUEST_URI'];
        $my_arr=explode('/', $my);
        $my_id=end($my_arr);
        $gallerys=Gallery::all();
        $works=Work::where('gallery_id', $id)->orderBy('id', 'DESC')->paginate(9);
        return view('gallery', compact('obj', 'my_id', 'gallerys', 'works'));
    }
    public function getAll() {
        $objs=Gallery::All();
        return view('gallerys', compact('objs'));
    }
}
