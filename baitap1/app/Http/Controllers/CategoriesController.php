<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller{
    public function __construct(){

    }
    //hiển thị danh sách chuyên mục(phương thức get)
    public function index(){
        return 'danh sách sản phẩm';
    }
    //lấy ra 1 chuyên mục theo id (phương thức get)
    public function getCategory($id){

    }
    //cập nhật 1 chuyên mục (phương thức post)
    public function updateCategory($id){

    }
    //show form thêm dữ liệu (phương thức get)
    public function showCategory(){

    }
    //thêm dữ liệu vào chuyên mục(phương thức post)
    public function add(){

    }

    //xóa dữ liệu (phương thức Delete)
    public function deleteCatagory(){

    }
}