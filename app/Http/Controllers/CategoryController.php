<?php

namespace App\Http\Controllers;

use App\BlogOne;
use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }

    protected function checkCategoryData($request){
        $this->validate($request,[
            'category_name'        => 'required|max:50|min:3',
            'category_description' => 'required|max:100'
        ]);
    }

    public function newCategory(Request $request){
        $this->checkCategoryData($request);

        Category::saveCategoryInfo($request);
        return redirect('/category/add-category')->with('message', 'Category Info save successfully');
    }

    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories' => Category::all()
        ]);
    }

    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category' => Category::find($id)
        ]);
    }

    public function updateCategory(Request $request){
        Category::updateCategoryInfo($request);
        return redirect('/category/manage-category')->with('message', 'Category Info Update Successfully');
    }

    public function deleteCategory(Request $request){
        $blog_one = BlogOne::where('category_id', $request->id)->first();
        if($blog_one){
            return redirect('/category/manage-category')->with('message', 'Sorry we can not delete this category because some blogs have this category');
        }else{
            $category = Category::find($request->id);
            $category->delete();
            return redirect('/category/manage-category')->with('message', 'Category Info Delete Successfully');
        }
    }

//    public function searchHome(Request $request){
//        $name = $request->input('name');
//        $categories = Category::all()
//        ->search($name);
//
//        return view('admin.search.search-home', compact('categories', 'name'));
//    }
}
