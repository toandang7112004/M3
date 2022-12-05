<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function validationEmail(Request $request){
        $email = $request->email;
        $check_email = true;
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $check_email =false;
        }
        return view('index',compact('check_email'));
    }
}
