<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\BlogOne;

class Category extends Model
{
    protected $fillable = ['category_name', 'category_description', 'publication_status'];

    public static function saveCategoryInfo($request){

//        DB::table('categories')->insert([
//            'category_name'          => $request->category_name,
//            'category_description'   => $request->category_description,
//            'publication_status'     => $request->publication_status,
//        ]);

//        $category = new Category();
//        $category->category_name         = $request->category_name;
//        $category->category_description  = $request->category_description;
//        $category->publication_status    = $request->publication_status;
//        $category->save();

        Category::create($request->all());
    }

    public static function updateCategoryInfo($request){
        $unpublishedBlog = '';
        $category = Category::find($request->id);
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        if($category->publication_status == '0'){
            $blog_ones = BlogOne::where('category_id', $request->id)
                        ->where('publication_status', 1)->get();
            foreach ($blog_ones as $blog_one){
                $blog_one->publication_status = 2;
                $blog_ones->save();
            }
        }else if($category->publication_status == '1'){
            $blog_ones = BlogOne::where('category_id', $request->id)
                        ->where('publication_status', 2)->get();
            foreach ($blog_ones as $blog_one){
                $blog_one->publication_status = 1;
                $blog_ones->save();
            }
        }
        $category->save();
    }

//    public function searchScope($request, $name){
//        return $request->whare('category', 'like', '%' .$name. '%')
//                    ->orwhere('blog_one_title', 'like', '%' .$name. '%')
//                    ->orwhere('blog_two_title', 'like', '%' .$name. '%')
//                    ->orwhere('blog_one_short_description', 'like', '%' .$name. '%')
//                    ->orwhere('blog_one_long_description', 'like', '%' .$name. '%')
//                    ->orwhere('blog_two_short_description', 'like', '%' .$name. '%')
//                    ->orwhere('blog_two_long_description', 'like', '%' .$name. '%');
//    }

}
