<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    
    // Đổ data ra trang
    public function getAll(){

        $user=DB::table('users')->orderBy('id','desc')->get();
        return view('UserList',compact('user'));

    }
    //Thêm user
    public function getFormAdd(){

        return view('AddUser');
    }
    public function postFormAdd(Request $req){

        $this->validate($req,[
            'txtname'=>'required|min:6',            
            'email'=>'required|email',
            'password'=>[
                'required',
                'min:6',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'],
            'repass'=>'same:password'
        ]);
        
        $is_active=0;
        if($req->check==1)
            $is_active=1;

            // Create User
        $u=User::create([
            'name'=>$req->txtname,
            'email'=>$req->email,
            'password'=>Hash::make($req->repass),
            'remember_token' => Str::random(10),
            'is_active'=>$is_active,
            'is_delete'=>0,
            'group_role'=>$req->group,
            'last_login_at'=>date('Y-m-d H:i:s'),
            'last_login_ip'=>fake()->numerify($string = '###.##.###'),
            'created_at'=>date("Y-m-d"),
            'updated_at'=>date("Y-m-d")
        ]);

        $u->save();

        return redirect('/User');
    }
}
