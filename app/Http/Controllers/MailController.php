<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendEmail()
    {
        $info = [
            'name' => 'Pratham',
            'content' => 'verification message'

        ];
        Mail::to('modipratham591@gmail.com')->send(new SendMail($info));

    }

}
