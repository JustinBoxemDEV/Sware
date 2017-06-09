<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller {

    /**
     * send the email.
     *
     * @param  Request  $request
     * @param  int  $emails
     * @return Response
      $contactEmail = "sware.contact@gmail.com";
      $sender = Input::get('sender');
      $message = Input::get('mailMsg');
     */
    
    public function sendMail(Request $request) {
    $this->validate($request, [

      'email' => 'required|email',
      'subject' => 'required|min:3',
      'message' => 'required|min:10'
    ]);

    $data = array(
      'email' => $request->email,
      'subject' => $request->subject,
      'mailbody' => $request->message
    );

    Mail::send('emails.contact', $data, function($message) use ($data) {
      $message->from($data['email']);
      $message->to('sware.contact@gmail.com');
      $message->subject($data['subject']);
    });
  }

}
