<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductEntryController extends Controller
{
    public function getProductEntry()
    {
        $UID = TestController::getEntry();
        return view('pages.entry',compact('UID'));
    }
}
