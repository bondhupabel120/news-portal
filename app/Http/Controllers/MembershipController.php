<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;
use App\Category;
use App\BlogOne;
use App\Breaking;
use App\International;
use DB;

class MembershipController extends Controller
{
    public function indexTwo(){
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


    public function newMember(Request $request){
        Membership::saveMembershipInfo($request);
        return redirect('/')->with('message', 'Registration Successfully');
    }

    public function seeMember(){
        return view('admin.member.see-member',[
            'memberships' => DB::table('memberships')
                ->select('memberships.*')
                ->orderBy('memberships.id', 'desc')
                ->get()
        ]);
    }

    public function deleteMember(Request $request){
        Membership::deleteMembership($request);
        return redirect('/see-member')->with('message','Delete Successfully');
    }
}
