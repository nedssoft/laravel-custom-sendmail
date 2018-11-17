<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendEmail()
    {
        $params['data']           = ['foo' => 'Hello John Doe!']; //optional
        $params['to']             = 'recipient@example.com'; //required
        $params['template_type']  = 'markdown';  //default is view
        $params['template']       = 'emails.app-mailer'; //path to the email template
        $params['subject']        = 'Some Awesome Subject'; //optional
        $params['from_email']     = 'jondoe@example.com';
        $params['from_name']      = 'John Doe';
        sendmail($params);
        
        echo 'mail sent';
    }
}
