<?php

namespace App\Http\Controllers;

use App\Other;
use Illuminate\Http\Request;
use App\Category;
use App\Breaking;
use App\International;
use Session;
use DB;

class OtherController extends Controller
{
    public function userWritten(){
        return view('front.other.written', [
            'categories'          => Category::where('publication_status', 1)->get(),
            'category_categories' => Category::where('publication_status', 1)->take(5)->get(),
            'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function newUserWritten(Request $request){
        Other::newUserWrittenInfo($request);
        return redirect('/user-written')->with('message', 'Send Successfully');
    }

    public function showWritten(){
        return view('front.other.show-written',[
            'categories'            => Category::where('publication_status', 1)->get(),
            'category_categories'   => Category::where('publication_status', 1)->take(5)->get(),
            'others'                => Other::where('publication_status', 1)->orderBy('id', 'desc')->take(12)->get(),
            'breakings'             => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'        => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function writtenDetails($id){
        return view('front.other.written-details',[
            'categories'            => Category::where('publication_status', 1)->get(),
            'category_categories'   => Category::where('publication_status', 1)->take(5)->get(),
            'other'                 => Other::find($id),
            'others'                => Other::where('publication_status', 1)->orderBy('id', 'desc')->get(),
            'breakings'             => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'        => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function seeWritten(){
        return view('admin.other.see-written',[
            'others' => DB::table('others')
                ->select('others.*')
                ->orderBy('others.id', 'desc')
                ->get()
        ]);
    }

    public function unpublishedWritten($id){
        $other = Other::find($id);
        $other->publication_status = 0;
        $other->save();

        return redirect('/see-written');
    }

    public function publishedWritten($id){
        $other = Other::find($id);
        $other->publication_status = 1;
        $other->save();

        return redirect('/see-written');
    }

}
