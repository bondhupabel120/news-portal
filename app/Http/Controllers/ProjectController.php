<?php

namespace App\Http\Controllers;

use App\BlogOne;
use App\BlogTwo;
use App\Breaking;
use App\Category;
use App\International;
use App\Visitor;
use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    public function index(){
        return view('front.home.home',[
            'categories'          => Category::where('publication_status', 1)->get(),
            'blog_one_ones'       => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'blog_one_twos'       => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(1)->take(2)->get(),
            'blog_ones'           => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(3)->take(9)->get(),
            'blog_one_threes'     => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(12)->take(5)->get(),
            'blog_one_fours'      => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(17)->take(6)->get(),
//            'blog_twos'           => BlogTwo::where('publication_status', 1)->orderBy('id', 'desc')->take(8)->get(),
            'popular_blogs'       => BlogOne::orderBy('hit_count', 'desc')->take(4)->get(),
//            'popular_blog_twos'   => BlogTwo::orderBy('hit_count_two', 'desc')->take(2)->get(),
            'category_categories' => Category::where('publication_status', 1)->take(5)->get(),
            'blog_ones_extras'    => BlogOne::where('publication_status', 1)->orderBy('id', 'asc')->take(8)->get(),
//            'blog_twos_extras'    => BlogTwo::where('publication_status', 1)->orderBy('id', 'asc')->take(6)->get(),
            'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function categoryBlog($id, $name){
        $categoryById = Category::find($id);
        return view('front.category.category-blog',[
            'categoryById'        => $categoryById,
            'categories'          => Category::where('publication_status', 1)->get(),
            'blog_one_ones'       => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'blog_one_twos'       => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(1)->take(2)->get(),
            'blog_ones'           => BlogOne::where('category_id', $id)->where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'blog_one_threes'     => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(12)->take(5)->get(),
            'blog_one_fours'      => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(17)->take(6)->get(),
//            'blog_twos'           => BlogTwo::where('category_id', $id)->where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'category_categories' => Category::where('publication_status', 1)->take(5)->get(),
            'blog_ones_extras'    => BlogOne::where('publication_status', 1)->orderBy('id', 'asc')->take(8)->get(),
//            'blog_twos_extras'    => BlogTwo::where('publication_status', 1)->orderBy('id', 'asc')->take(6)->get(),
            'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function blogDetails($id){
        $blog_one                 = BlogOne::find($id);
        $blog_one->hit_count      = $blog_one->hit_count + 1;
        $blog_one->save();

        return view('front.blog.blog-details',[
            'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'blog_ones_extras'    => BlogOne::where('publication_status', 1)->orderBy('id', 'asc')->take(8)->get(),
//            'blog_twos_extras'    => BlogTwo::where('publication_status', 1)->orderBy('id', 'asc')->take(6)->get(),
            'blog_one_ones'       => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'blog_one_twos'       => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(1)->take(2)->get(),
            'blog_one_threes'     => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(12)->take(5)->get(),
            'blog_one_fours'      => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(17)->take(6)->get(),
            'category_categories' => Category::where('publication_status', 1)->take(5)->get(),
            'categories'          => Category::where('publication_status', 1)->get(),
            'blog_one'            => BlogOne::find($id),
            'comments'            => DB::table('comments')
                                  ->join('visitors', 'comments.visitor_id', '=', 'visitors.id')
                                  ->select('comments.*', 'visitors.first_name', 'visitors.last_name', 'visitors.image')
                                  ->where('comments.blog_id', $id)
                                  ->where('comments.publication_status', 1)
                                  ->orderBy('comments.id', 'desc')
                                  ->get(),
        ]);
    }

    public function searchView(){
        return view('front.search-view', [
            'categories'          => Category::where('publication_status', 1)->get(),
            'blogs'               => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->take(6)->get(),
            'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'category_categories' => Category::where('publication_status', 1)->take(5)->get(),
        ]);
    }

    public function search(Request $request){
        $search = $request->search;

        if($search) {
            $searches = DB::table('blog_ones')
                ->where('blog_one_title', 'LIKE', '%'.$search.'%')
                ->orWhere('blog_one_short_description', 'LIKE', '%'.$search.'%')
                ->get();
            if($searches) {
                foreach ($searches as $key => $search) {

                    return view('front.search-api', [
                       'searches' => $searches,
                        'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
                    ]);
                }
            }
        }
    }

//
//    public function blogDetailsTwo($id){
//        $blog_two                 = BlogTwo::find($id);
//        $blog_two->hit_count_two  = $blog_two->hit_count_two + 1;
//        $blog_two->save();
//
//        return view('front.blog.blog-details-two',[
//            'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
//            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
//            'blog_ones_extras'    => BlogOne::where('publication_status', 1)->orderBy('id', 'asc')->take(6)->get(),
////            'blog_twos_extras'    => BlogTwo::where('publication_status', 1)->orderBy('id', 'asc')->take(6)->get(),
//            'blog_one_ones'       => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->take(1)->get(),
//            'blog_one_twos'       => BlogOne::where('publication_status', 1)->orderBy('id', 'desc')->skip(1)->take(2)->get(),
//            'category_categories' => Category::where('publication_status', 1)->take(5)->get(),
//            'categories'          => Category::where('publication_status', 1)->get(),
//            'blog_two'            => BlogTwo::find($id),
//            'comments'            => DB::table('comments')
//                                  ->join('visitors', 'comments.visitor_id', '=', 'visitors.id')
//                                  ->select('comments.*', 'visitors.first_name', 'visitors.last_name')
//                                  ->where('comments.blog_id', $id)
//                                  ->where('comments.publication_status', 1)
//                                  ->orderBy('comments.id', 'desc')
//                                  ->get(),
//        ]);
//    }
}
