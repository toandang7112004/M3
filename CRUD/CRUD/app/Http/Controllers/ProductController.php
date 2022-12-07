<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        // dd(request()->key);
        return view('product.index',compact('products'));
    }
    public function create(){
        return view('product.create');
    }
    public function add(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('products.index');
    }
    public function edit($id){
        $product = Product::find($id);
        // dd($product);
        return view('product.edit', compact('product'));
    }
    public function update( Request $request , $id){
        $product = Product::find($id);
        $product->name = $request->name;;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('products.index');
    }
    public function destroy($id)
    {
        product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
