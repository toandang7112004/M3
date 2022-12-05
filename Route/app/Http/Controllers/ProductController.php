<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        echo 'danh sách';
        return view('products.index');
    }
    public function destroy($id){

    }
    public function update(Request $request , $id){

    }
    public function store(Request $request ){

    }
    public function show($id){

    }
    public function edit($id){

    }
    public function create(){

    }
}
