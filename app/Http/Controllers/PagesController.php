<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{ 
    public function index(){
        return view('welcome');
    }
    
    public function getcontact(){
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