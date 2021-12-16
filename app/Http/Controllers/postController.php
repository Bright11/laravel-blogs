<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\category;
use App\Models\comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class postController extends Controller
{
    //
    public function index()
    {
        $post = post::all()->where('status','=','active');
        $cat= category::all();

        return view('post.index',['post'=>$post,'cat'=>$cat]);
    }

    public function profile()
    {

        return view('post.profile');
    }

    public function postblog()
    {
        if($user_id=Session::get('user')['id'])
        {
            $cat=category::all();
            return view('post.postblog',['cat'=>$cat]);
        }else{
            return redirect('login')->with('status','wrong email or password please try again');
        }


    }

    public function bloggerpost()
    {
        if($user_id=Session::get('user')['id'])
        {
           // $user_id= Session::get('user')['id'];
            $post =DB::table('posts')
            ->where('posts.user_id',$user_id)
            ->get();
            return view('post.bloggerpost',['post'=>$post]);
        }else{
            return redirect('/');
        }
        //return view('bloggerpost');
    }

    public function deleteblogerpost($id)
    {
        //return $id;
        if($user_id=Session::get('user')['id'])
        {
            post::destroy($id);
            return back();
        }else{
            return redirect('post.bloggerpost');
        }
    }
    public function blogcategory($id)
    {
        //return $id;
        //cartpage
       if(category::where('id',$id)->exists())
       {
           $category = category::where('id',$id)->first();
           $post = post::where('cat_id',$category->id)->get();
           return view('post.blogcategory',['post'=>$post,'category'=>$category]);
       }else{
           return redirect('/');
       }


    }


    public function postnow(Request $req)
    {
        if($req->session()->has('user'))
        {
          $post=new post;
          if($req->hasFile('image'))
          {
              $path=$post->image=$req->image->store('public/blogimages');
            $post->user_id=$req->session()->get('user')['id'];
            $post->title=$req->title;
             $post->cat_id=$req->cat_id;
             $post->post=$req->post;
             $post->$path;
             $post->save();
             return redirect('/');
          }else{
            $post->user_id=$req->session()->get('user')['id'];
            $post->title=$req->title;
             $post->cat_id=$req->cat_id;
             $post->post=$req->post;
             $post->save();
             return redirect('/');
          }

        }else{
            return redirect('post.profile');
        }
        return redirect('post.profile');
    }

    function details($id)
    {
        $post = post::find($id);
        return view('post.details',['post'=>$post,'comment'=>$post->comment()->get()]);
    }
//<option value="category" disabled selected></option>


}
