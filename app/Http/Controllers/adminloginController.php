<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\adminuser;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;
class adminloginController extends Controller
{
    //

    public function adminregister()
    {
        return view('admin.adminregister');
    }

    public function adminregisternow(Request $req)
    {

        $admin = new adminuser;
       if($req->hasFile('image'))
       {
        $path=$admin->image=$req->image->store('public/adminprofileimg');
        $admin->name=$req->name;
        $admin->adminemail=$req->adminemail;
        $admin->password=Hash::make($req->password);
        $admin->$path;
        $admin->save();
        return redirect('admin/adminregister');
       }else{
       
        $admin->name=$req->name;
        $admin->adminemail=$req->adminemail;
        $admin->password=Hash::make($req->password);
        $admin->save();
        return redirect('admin/');
       }
    }

    public function adminlogin()
    {

        return view('admin/adminlogin');
    }

    public function adminloginnow(Request $req)
    {
        $admin= adminuser::where(['adminemail'=>$req->adminemail])->first();
        if(!$admin || !Hash::check($req->password,$admin->password))
        {
            return redirect('admin/');
        }else{
            $req->session()->put('adminuser',$admin);
            return redirect('admin/');
        }

        return redirect('admin/');
    }

    public function adminlogout()
    {
        Session::forget('adminuser');
        return redirect('admin/');
    }

}
