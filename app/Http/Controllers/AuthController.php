<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

use App\Models\User;


class AuthController extends Controller
{
    public function getLogin(){

        return view('Login');

    }
    public function postLogin(LoginRequest $req){

        if(Auth::attempt(['email'=>$req->email,'password'=>$req->password]))
        {
            return redirect('/admin');
        }
        else{

            return redirect('/login')->with('thongbao','Đăng nhập không thành công');
        }
    }

    public function getRegister(){

        return view('Register');
    }

    public function postRegister(RegisterRequest $req){

        

        $u=User::create([

            'name'=>$req->txtname,
            'email'=>$req->email,
            'password'=>Hash::make($req->repass),
            'remember_token' => Str::random(10),
            'is_active'=>1,
            'is_delete'=>0,
            'group_role'=>1,
            'last_login_at'=>date('Y-m-d H:i:s'),
            'last_login_ip'=>fake()->numerify($string = '###.##.###'),
            'created_at'=>date("Y-m-d"),
            'updated_at'=>date("Y-m-d")
        ]);

        $u->save();

        return redirect('/login')->with('thongbao','Đăng ký thành công');;
    }

    public function getLogout(){

        Auth::logout();
        return redirect('/login');
    }
}
