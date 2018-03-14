<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }
    public function storMail(ContactFormRequest $request){
        $contact = new  Contacto();
        $contact->name=$request->name;
        $contact->mail=$request->mail;
        $contact->msg=$request->msg;
        $contact-> save();

    }
    public function store (Request $request){
               }
    //
}

