<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAll(){
        $product=Product::all();
        return view('ProductList',compact('product'));
    }
}
