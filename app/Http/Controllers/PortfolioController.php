<?php

namespace App\Http\Controllers;

use App\Mail\ContactInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;

class PortfolioController extends Controller
{
    public function saveContactForm(Request $request){

      //dd($request->Email);
        $this->validate($request, [
            'Name'      => 'bail|required|string',
            'Email'     => 'bail|required|email',
            'Message'   => 'required'
          ]);
      
          // The contact info is valid, send email
          $data = array(
            'Name'       => $request->input('Name'),
            'Email'      => $request->input('Email'),
            'Message'    => $request->input('Message')
          );
          
         Mail::to('omorfaruk2010@gmail.com')->send(new ContactInformation($data));
      
          // Redirect back to form
          //return back()->with('status', 'Thank you! Someone will review your request and get back to you shortly.');
          return redirect('/contact')
          ->with('message','Thank you! Got Your Email and I get back to you shortly.');
    }
}
