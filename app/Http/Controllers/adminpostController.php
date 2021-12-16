<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;
class adminpostController extends Controller
{
    //
    public function adminhome()
    {

        return view('admin/adminhome');

    }
    public function category()
    {

        return view('admin.category');
    }

    public function insertcategory(Request $req)
    {
        $cart= new category;
        $cart->catname=$req->catname;
        $cart->save();
        return redirect('admin/category');
    }

    public function adminpost()
    {
        $post= post::all();
        return view('admin/adminpost',['post'=>$post]);
    }

    public function approveblog(Request $req,$id)
    {
        $post = post::find($id);
        //return $id;
        $post->status=$req->status;
        $post->update();
        return redirect('admin/adminpost');
    }
    public function Deactivatepost(Request $req,$id)
    {
        $post = post::find($id);
        //return $id;
        $post->status=$req->status;
        $post->update();
        return redirect('admin/adminpost');

    }

    public function deletepost($id)
    {
        //return $id;
        post::destroy($id);
        return redirect('admin/adminpost');
    }
}
