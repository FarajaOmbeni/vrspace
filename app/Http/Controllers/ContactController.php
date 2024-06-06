<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function createContact(Request $request)
    {
        $contact = new Contact();
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->phonenumber = $request->phonenumber;
        $contact->message = $request->message;
        $contact->save();
        return redirect("/contact");
    }
}
