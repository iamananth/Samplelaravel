<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebtechController extends Controller
{
    public function wt($id)
    {
        $post = \DB::table('webtech')->where("id", $id)->first();
        if(!$post){
            abort(404);
        }
        $data = [
            "post" => $post
        ];
        return view("webtech.webtech", $data);
    }
}
