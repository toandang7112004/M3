<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function CalculatorController(Request $request){
      switch ($request->calculator) {
        case '+':
            $result = $request->numberOne + $request->numberTwo;
            break;
        case '-':
            $result = $request->numberOne - $request->numberTwo;
            break;
        case '*':
            $result = $request->numberOne * $request->numberTwo;
            break;
        case '/':
            if($request->numberTwo != 0){
                $result = $request->numberOne / $request->numberTwo;
            }else{
                $result = 'numberTwo k được rỗng';
            }
            break;
        default:
        $result = "Không có Phép Tính";
            break;
      }
      return view('calculator', compact('result'));
    }
}