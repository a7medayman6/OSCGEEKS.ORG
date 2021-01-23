<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class ContactController extends Controller
{
    public function send(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|regex:/(01)[0-9]{9}/',
            'message' => 'required',
        ]);
        

        // Send email
        
        Mail::to('oschrs@gmail.com')->send(new ContactForm($data));
       session()->flash('success','Email Sent Successfully'); 
       return redirect()->back();
        
        
    }
}
