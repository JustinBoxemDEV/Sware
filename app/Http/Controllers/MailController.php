<?php

namespace App\Http\Controllers;

use Input;
use App\Mail\GenericMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller {

    /**
     * send the email.
     *
     * @param  Request  $request
     * @param  int  $emails
     * @return Response
     */
    public function sendMail(Request $request) {
        // Define required data

        $contactEmail = "sware.contact@gmail.com";
        $sender = Input::get('sender');
        $message = Input::get('mailMsg');

        // Send email...
        Mail::to($contactEmail)->send(new GenericMail($message, $sender));
    }

}
