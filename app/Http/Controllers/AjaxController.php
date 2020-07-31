<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Work;

class AjaxController extends Controller
{
    public function postIndex() {
        $id=(int)$_POST['id'];
        $work=Work::find($id);
        $obj=Gallery::find($work->gallery_id);
        return view('ajax.modal', compact('work', 'obj'));
    }
}
