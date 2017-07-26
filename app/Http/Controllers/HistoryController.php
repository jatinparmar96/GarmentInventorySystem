<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function getHistory()
    {
        return view('pages.history');

    }
}
