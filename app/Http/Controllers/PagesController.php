<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

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
        
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from('sware.contact@gmail.com' | $data['email']);
            $message->to('sware.contact@gmail.com');
            $message->subject($data['subject']);
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