<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;

class PagesController extends Controller
{ 
    public function index(){
        return view('welcome');
    }
    
    public function getcontact(){
        return view('contact');
    }
    
    public function postcontact(Request $request){
        $this->validate($request, 
            [
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required|min:10'
            ]);
        
        Mail::queue('emails.contact', $data, function(){
            
        });
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