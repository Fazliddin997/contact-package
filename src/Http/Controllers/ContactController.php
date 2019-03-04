<?php

namespace Fzn\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Fzn\Contact\Mail\ContactMailable;
use Fzn\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }


    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
//        return self::index();
        return redirect(route('contact'));
    }
}
