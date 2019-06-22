<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;

class FrontendController extends Controller
{
    function index(){
        $products = Product::all();
        return view('welcome', compact('products'));
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
    function productDetails($product_id){
        $product = Product::find($product_id);
        $related_products = Product::where('id', '!=', $product_id)->get();
        return view('frontend/productdetails', compact('product', 'related_products'));
    }
}
