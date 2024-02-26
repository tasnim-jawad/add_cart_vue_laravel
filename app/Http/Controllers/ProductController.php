<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

    public function show(){
        $products = Product::paginate(5);
        // dd($products);
        return $products;
    }
}
