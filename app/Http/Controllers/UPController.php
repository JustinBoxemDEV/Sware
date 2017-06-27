<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
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
        $localHour = date("G") +2;
        if($localHour >= 0 && $localHour < 12){
            $welcomeMsg = "Goedemorgen " . Auth::user()->name;
        }
        if($localHour >= 12 && $localHour < 18){
            $welcomeMsg = "Goedemiddag " . Auth::user()->name;
        }
        if($localHour >= 18){
            $welcomeMsg = "Goedenacht " . Auth::user()->name;
        }
        return view('up.index', compact('welcomeMsg'));
    }
    
}
