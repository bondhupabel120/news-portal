<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breaking extends Model
{
    protected $fillable = ['add_breaking_news', 'publication_status'];

    public static function updateBreakingNewsInfo($request){
        $breaking = Breaking::find($request->id);
        $breaking->add_breaking_news  = $request->add_breaking_news;
        $breaking->publication_status = $request->publication_status;
        $breaking->save();
    }
}
