<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Mail;

class Visitor extends Model
{
    protected $fillable = ['first_name','last_name','email_address','password','phone_number','image'];

    public static function saveVisitorInfo($request){

        $image = $request->file('image');

        $visitor = new Visitor();

        if($image) {
            $imageName = $image->getClientOriginalName();
            $directory = 'upload/visitor-image/';
            $image->move($directory, $imageName);
            $visitor->image         = $directory.$imageName;
            Session::put('visitorImage', $directory.$imageName);
        }




        $visitor->first_name    = $request->first_name;
        $visitor->last_name     = $request->last_name;
        $visitor->email_address = $request->email_address;
        $visitor->password      = bcrypt($request->password);
        $visitor->phone_number  = $request->phone_number;

        $visitor->save();

        Session::put('visitorId', $visitor->id);
        Session::put('visitorName', $visitor->first_name.' '.$visitor->last_name);


        $data = $visitor->toArray();
        Mail::send('front.mail.congratulation-mail', $data, function ($message) use ($data){
            $message->to($data['email_address']);
            $message->subject('Congratulation Mail');
        });
    }
}
