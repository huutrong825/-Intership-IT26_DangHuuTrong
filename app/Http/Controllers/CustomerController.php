<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function getAll()
    {
        $c=Customer::all();
        return view('',compact('c'));
    }
}
