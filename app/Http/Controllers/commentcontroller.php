<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
class commentcontroller extends Controller
{
    //
    public function postcomment(Request $req)
    {
       // return $id;
        $comment=new comment;
        $comment->user_id=$req->session()->get('user')['id'];
        $comment->post_id=$req->post_id;
        $comment->comment=$req->comment;
        $comment->save();
        return back();
    }
}
