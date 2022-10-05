<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function getAll()
    {
        $cus=Customer::paginate(10);
        return view('CustomerList',compact('cus'));
    }
}
