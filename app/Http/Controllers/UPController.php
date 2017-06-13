<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UPController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function upHome()
    {
        return view('up.index');
    }
}
