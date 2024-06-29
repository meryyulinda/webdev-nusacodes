<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addContact(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $saved = $contact->save();

        if(!$saved){
            App::abort(500, 'Error');
        }

        //successful page after sending get-in-touch form data
        return view('contactsent', ['contact'=>$contact]);
    }

}
