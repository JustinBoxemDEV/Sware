<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{ 
    public function index(){
        return view('welcome');
    }
    
    public function contact(){
        return view('contact');
    }
    
    public function team(){
        return view('team');
    }
    
    public function webdevelopment(){
        return view('webdevelopment');
    }
    
    public function emaintenance(){
        return view('e-maintenance');
    }
    
    public function ecleaning(){
        return view('e-cleaning');
    }
}