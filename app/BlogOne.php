<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogOne extends Model
{
    protected $fillable = ['category_id','blog_one_title','blog_one_short_description','blog_one_long_description','blog_one_image','publication_status'];

    public static function uploadImageOne($request){
        $image     = $request->file('blog_one_image');
        $imageName = $image->getClientOriginalName();
        $directory = 'blog-images/';
        $image->move($directory, $imageName);

        $blog_one = new BlogOne();
        $blog_one->category_id                = $request->category_id;
        $blog_one->blog_one_title             = $request->blog_one_title;
        $blog_one->blog_one_short_description = $request->blog_one_short_description;
        $blog_one->blog_one_long_description  = $request->blog_one_long_description;
        $blog_one->blog_one_image             = $directory.$imageName;
        $blog_one->publication_status         = $request->publication_status;
        $blog_one->save();
    }

    public static function updateOne($request){
        $blogOneImage = $request->file('blog_one_image');
        $blog_one     = BlogOne::find($request->id);
        if ($blogOneImage){
            if(file_exists($blog_one->blog_one_image)){
                unlink($blog_one->blog_one_image);
            }

            $imageName = $blogOneImage->getClientOriginalName();
            $directory = 'blog-images/';
            $blogOneImage->move($directory, $imageName);

            $blog_one->category_id                = $request->category_id;
            $blog_one->blog_one_title             = $request->blog_one_title;
            $blog_one->blog_one_short_description = $request->blog_one_short_description;
            $blog_one->blog_one_long_description  = $request->blog_one_long_description;
            $blog_one->blog_one_image             = $directory.$imageName;
            $blog_one->publication_status         = $request->publication_status;
            $blog_one->save();
        }
        else{
            $blog_one->category_id                = $request->category_id;
            $blog_one->blog_one_title             = $request->blog_one_title;
            $blog_one->blog_one_short_description = $request->blog_one_short_description;
            $blog_one->blog_one_long_description  = $request->blog_one_long_description;
            $blog_one->publication_status         = $request->publication_status;
            $blog_one->save();
        }
    }

    public static function deleteBlogOne($request){
        $blog_one = BlogOne::find($request->id);
        if(file_exists($blog_one->blog_one_image)){
            unlink($blog_one->blog_one_image);
        }
        $blog_one->delete();
    }

}
