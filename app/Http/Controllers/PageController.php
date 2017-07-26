<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getDashboard()
    {
        return view('pages.dashboard');
    }

    public function getBilling()
    {
        return view('pages.billing');

    }

    public function getProductEntry()
    {
        $UID = TestController::getEntry();
        return view('pages.entry',compact('UID'));
    }

    public function getHistory()
    {
        return view('pages.history');

    }


}
