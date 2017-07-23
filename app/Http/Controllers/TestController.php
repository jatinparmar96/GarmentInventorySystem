<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test(Request $request)
    {
      //  dd($request['barcodeValue']);
        return view('test',['number'=>$request['number'],'value'=>$request['barcodeValue']]);
    }

}
