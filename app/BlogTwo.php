<?php
//
//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class BlogTwo extends Model
//{
//    protected $fillable = ['category_id','blog_two_title','blog_two_short_description','blog_two_long_description','blog_two_image','publication_status'];
//
//    public static function uploadImageTwo($request){
//        $image     = $request->file('blog_two_image');
//        $imageName = $image->getClientOriginalName();
//        $directory = 'blog-images/';
//        $image->move($directory, $imageName);
//
//        $blog_two = new BlogTwo();
//        $blog_two->category_id                = $request->category_id;
//        $blog_two->blog_two_title             = $request->blog_two_title;
//        $blog_two->blog_two_short_description = $request->blog_two_short_description;
//        $blog_two->blog_two_long_description  = $request->blog_two_long_description;
//        $blog_two->blog_two_image             = $directory.$imageName;
//        $blog_two->publication_status         = $request->publication_status;
//        $blog_two->save();
//    }
//
//    public static function updateTwo($request){
//        $blogTwoImage = $request->file('blog_two_image');
//        $blog_two     = BlogTwo::find($request->id);
//        if ($blogTwoImage){
//            if(file_exists($blog_two->blog_two_image)){
//                unlink($blog_two->blog_two_image);
//            }
//
//            $imageName = $blogTwoImage->getClientOriginalName();
//            $directory = 'blog-images/';
//            $blogTwoImage->move($directory, $imageName);
//
//            $blog_two->category_id                = $request->category_id;
//            $blog_two->blog_two_title             = $request->blog_two_title;
//            $blog_two->blog_two_short_description = $request->blog_two_short_description;
//            $blog_two->blog_two_long_description  = $request->blog_two_long_description;
//            $blog_two->blog_two_image             = $directory.$imageName;
//            $blog_two->publication_status         = $request->publication_status;
//            $blog_two->save();
//        }
//        else{
//            $blog_two->category_id                = $request->category_id;
//            $blog_two->blog_two_title             = $request->blog_two_title;
//            $blog_two->blog_two_short_description = $request->blog_two_short_description;
//            $blog_two->blog_two_long_description  = $request->blog_two_long_description;
//            $blog_two->publication_status         = $request->publication_status;
//            $blog_two->save();
//        }
//    }
//
//    public static function deleteBlogTwo($request){
//        $blog_two = BlogTwo::find($request->id);
//        if(file_exists($blog_two->blog_two_image)){
//            unlink($blog_two->blog_two_image);
//        }
//        $blog_two->delete();
//    }
//
//}
