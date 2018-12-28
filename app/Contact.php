<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','email','message'];

    public static function newContactInfo($request){
        $contact = new Contact();
        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->message = $request->message;
        $contact->save();
    }

    public static function deleteContactInfo($request){
        $contact = Contact::find($request->id);
        $contact->delete();
    }
}
