<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    protected $fillable = ['full_name','address','subject','title','image','description'];

    public static function newUserWrittenInfo($request){
        $image     = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = 'written-image/';
        $image->move($directory, $imageName);

        $written = new Other();
        $written->full_name     = $request->full_name;
        $written->address       = $request->address;
        $written->subject       = $request->subject;
        $written->title         = $request->title;
        $written->image         = $directory.$imageName;
        $written->description   = $request->description;
        $written->save();
    }
}
