<?php

namespace App\Http\Controllers;


use App\Http\Requests\CusstomRequest;
use Illuminate\Http\Request;

class CusstomController extends Controller
{
    public function checkValidate(Request $Request)
    {
        $success = "Dữ liệu được xác thực thành công";
        return view('cusstom',compact('success'));
//        echo 'Name: '. $request->name.'. Age: '.$request->age;
    }
}

