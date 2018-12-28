<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class International extends Model
{
    protected $fillable = ['add_international_news', 'publication_status'];

    public static function updateInternationalNewsInfo($request){
        $international                         = International::find($request->id);
        $international->add_international_news = $request->add_international_news;
        $international->publication_status     = $request->publication_status;
        $international->save();
    }
}
