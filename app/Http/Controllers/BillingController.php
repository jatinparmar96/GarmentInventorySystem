<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function getBilling()
    {
        return view('pages.billing');

    }
}
