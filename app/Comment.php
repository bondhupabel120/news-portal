<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Comment extends Model
{
    protected $fillable = ['visitor_id','blog_id','comment'];

    public static function saveCommentInfo($request){

        $comment = new Comment();

        $comment->visitor_id = $request->visitor_id;
        $comment->blog_id    = $request->blog_id;
        $comment->comment    = $request->comment;
        $comment->save();
    }

//    public static function saveCommentInfoTwo($request){
//
//        $comment = new Comment();
//        $image = $request->file('image');
//
//        $visitor = new Visitor();
//
//        if($image) {
//            $comment->visitor_id = $request->visitor_id;
//            $imageName              = $image->getClientOriginalName();
//            $directory              = 'upload/visitor-image/';
//            $image->move($directory, $imageName);
//            $visitor->image         = $directory.$imageName;
//            Session::put('visitorImage', $directory.$imageName);
//        }
//
//        $comment = new Comment();
//        $comment->visitor_id = $request->visitor_id;
//        $comment->blog_id    = $request->blog_id;
//        $comment->image      = $request->image;
//        $comment->comment    = $request->comment;
//        $comment->save();
//    }

    public static function deleteCommentInfo($request){
        $comment = Comment::find($request->id);
        $comment->delete();
    }
}
