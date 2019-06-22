<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function addProductInsert(){
        $products = Product::paginate(10);
        $deleted_products = Product::onlyTrashed()->get();
        return view('product/add', compact('products', 'deleted_products'));
    }
    function ProductInsert(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_price' => 'required|numeric',
            'product_qty' => 'required|numeric',
            'alert_qty' => 'required|numeric',
        ]);
        Product::insert([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_qty' => $request->product_qty,
            'alert_qty' => $request->alert_qty,
        ]);
        return back()->with('addStatus', 'Product Added Successfully !');
    }
    function draftProduct($product_id){
        Product::find($product_id)->delete();
        return back()->with('deleteStatus', 'Product Drafted Successfully !');
    }
    function editProduct($product_id){
        $singleProduct = Product::findOrFail($product_id);
        return view('product/edit', compact('singleProduct'));
    }
    function updateProduct(Request $request){
        Product::find($request->product_id)->update([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_qty' => $request->product_qty,
            'alert_qty' => $request->alert_qty,
        ]);
        return back()->with('updateStatus', 'Product Updated Successfully !');
    }

    function restoreProduct($product_id){
        Product::onlyTrashed()->where('id', $product_id)->restore();
        return back();
    }
    function deleteProduct($product_id){
        Product::onlyTrashed()->find($product_id)->forceDelete();
        return back();
    }
}
