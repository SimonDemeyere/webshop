<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveSearch extends Controller
{
    function index() {
        return view('search.live_search');
    }
}
