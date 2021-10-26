<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    function login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checkLogin = DB::table('employees')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checkLogin) > 0)
        {
            $data = $req->input();
            $req->session()->put('email',$data['email']);
            return redirect('dashboard');
        } else {
            return redirect('/login')->with('warning', 'Your email and password did not match. Please try again!');
        }
    }

    function loginAdmin(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checkLogin = DB::table('admin')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checkLogin) > 0)
        {
            $data = $req->input();
            $req->session()->put('email',$data['email']);
            return redirect('/admin/dashboard');
        } else {
            return redirect('/login-admin')->with('warning', 'Your email and password did not match. Please try again!');
        }
    }

    function loginAsAdmin(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checkLogin = DB::table('admins')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checkLogin) > 0)
        {
            $data = $req->input();
            $req->session()->put('email',$data['email']);
            return redirect('/admin/dashboard');
        } else {
            return redirect('/login-as-admin')->with('warning', 'Your email and password did not match. Please try again!');
        }
    }
}
