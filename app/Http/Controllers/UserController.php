<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function getLogin(){
        return view('Login');
    }
    public function postLogin(Request $req){
        $this->validate($req,[
            "email"=>"required",
            "password"=>"required"
        ]);
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

    public function postRegister(Request $req){
        $this->validate($req,[           
            'repass'=>'same:pass',
            'name'=>'required',
            'email'=>'required'
            
        ],[
            "repass.same"=>"Mật khẩu nhập lại sai"
        ]);

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
