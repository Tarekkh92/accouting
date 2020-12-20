<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    function index()
    {
     return view('send_email');
    }
    function send(Request $request)
    {
     $this->validate($request, [
      'contactName'     =>  'required',
    //   'email'  =>  'required|email',
    //   'message' =>  'required'
     ]);

        $data1 = array(
            'contactName'      =>  $request->contactName
            // 'message'   =>   $request->message
        );

     Mail::to('web-tutorial@programmer.net')->send(new SendMailContact($data1));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
