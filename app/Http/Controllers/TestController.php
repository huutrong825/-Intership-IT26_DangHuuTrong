<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function show(){
        $u=User::all();
        return $u;
    }
    public function post(Request $req){
        
    }
}
