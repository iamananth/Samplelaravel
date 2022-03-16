<?php

namespace App\Http\Controllers;

use App\Models\posts as ModelsPosts;
use Illuminate\Http\Request;
use App\posts;
class OperationsController extends Controller
{
    public function Ops($id)
    {
        // $post = \DB::table('posts')->where("id", $id)->first();
        $post = ModelsPosts::where("id", $id)->first();
        if(!$post){
            abort(404);
        }
        $data = [
            "post" => $post
        ];
        return view("operations.index", $data);
    }
}
