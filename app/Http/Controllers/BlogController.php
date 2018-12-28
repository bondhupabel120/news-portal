<?php

namespace App\Http\Controllers;

use App\BlogOne;
use App\BlogTwo;
use App\Category;
use App\Comment;
use App\Contact;
use App\Other;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function addBlogOne(){
        return view('admin.blog-one.add-blog-one',[
            'categories' => Category::where('publication_status', 1)->get()
        ]);
    }

    public function addBlogTwo(){
        return view('admin.blog-two.add-blog-two',[
            'categories' => Category::where('publication_status', 1)->get()
        ]);
    }

    protected function checkCategoryDataOne($request){
        $this->validate($request,[
            'blog_one_title'             => 'required|max:150',
            'blog_one_short_description' => 'required|max:200',
            'blog_one_image'             => 'required|file'
        ]);
    }

    public function newBlogOne(Request $request){
        $this->checkCategoryDataOne($request);
        BlogOne::uploadImageOne($request);
        return redirect('/blog/add-blog-one')->with('message', 'Blog Info Created Successfully');
    }

    protected function checkCategoryDataTwo($request){
        $this->validate($request,[
            'blog_two_title'             => 'required|max:150',
            'blog_two_short_description' => 'required|max:200',
            'blog_two_image'             => 'required|file'
        ]);
    }

    public function newBlogTwo(Request $request){
        $this->checkCategoryDataTwo($request);
        BlogTwo::uploadImageTwo($request);
        return redirect('/blog/add-blog-two')->with('message', 'Blog Info Created Successfully');
    }

    public function manageBlogOne(){
        $blog_ones = DB::table('blog_ones')
                        ->join('categories', 'blog_ones.category_id', '=', 'categories.id')
                        ->select('blog_ones.*', 'categories.category_name')
                        ->orderBy('blog_ones.id', 'desc')
                        ->get();
        return view('admin.blog-one.manage-blog-one',[
            'blog_ones' => $blog_ones
        ]);
    }

    public function manageBlogTwo(){
        $blog_twos = DB::table('blog_twos')
                        ->join('categories', 'blog_twos.category_id', '=', 'categories.id')
                        ->select('blog_twos.*', 'categories.category_name')
                        ->orderBy('blog_twos.id', 'desc')
                        ->get();
        return view('admin.blog-two.manage-blog-two',[
            'blog_twos' => $blog_twos
        ]);
    }

    public function editBlogOne($id){
        return view('admin.blog-one.edit-blog-one',[
            'categories' => Category::where('publication_status', 1)->get(),
            'blog_one'   => BlogOne::find($id)
        ]);
    }

    public function editBlogTwo($id){
        return view('admin.blog-two.edit-blog-two',[
            'categories' => Category::where('publication_status', 1)->get(),
            'blog_two'   => BlogTwo::find($id)
        ]);
    }

    public function updateBlogOne(Request $request){
        BlogOne::updateOne($request);
        return redirect('/blog/manage-blog-one')->with('message', 'Blog Info Update Successfully');
    }

    public function updateBlogTwo(Request $request){
        BlogTwo::updateTwo($request);
        return redirect('/blog/manage-blog-two')->with('message', 'Blog Info Update Successfully');
    }

    public function deleteBlogOne(Request $request){
        BlogOne::deleteBlogOne($request);
        return redirect('blog/manage-blog-one')->with('message','Blog Info Delete Successfully');
    }

    public function deleteBlogTwo(Request $request){
        BlogTwo::deleteBlogTwo($request);
        return redirect('blog/manage-blog-two')->with('message','Blog Info Delete Successfully');
    }

}
