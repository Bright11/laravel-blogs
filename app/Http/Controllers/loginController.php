<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
//use Session;
use Illuminate\Support\Facades\Session;

//use Session;
class loginController extends Controller
{
    //

    public function register()
    {

        return view('login.register');
    }

    public function registernow(Request $req)
    {
        $user = new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/')->with('status','Login was successful.');
    }

    public function login()
    {

        return view('login.login');
    }

    public function loginnow(Request $req){
        $user = user::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
        return redirect('login')->with('status','wrong email or password please try again');
    }else{
        $req->session()->put('user',$user);
        //return redirect('/');
        return redirect('/');
    }
}

public function logout()
{
    //Session::forget('user');
    Session::forget('user');
    return redirect('/');
}
}
