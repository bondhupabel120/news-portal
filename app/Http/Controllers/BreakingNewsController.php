<?php

namespace App\Http\Controllers;

use App\Breaking;
use Illuminate\Http\Request;

class BreakingNewsController extends Controller
{
    public function addBreakingNews(){
        return view('admin.breaking.breaking-news');
    }

    public function newBreakingNews(Request $request){
        Breaking::create($request->all());
        return redirect('add-breaking-news')->with('message', 'News Save Successfully');
    }

    public function manageBreakingNews(){
        return view('admin.breaking.manage-breaking',[
            'breakings' => Breaking::all(),
        ]);
    }

    public function editBreakingNews($id){
        return view('admin.breaking.edit-breaking',[
            'breaking' => Breaking::find($id),
        ]);
    }

    public function updateBreakingNews(Request $request){
        Breaking::updateBreakingNewsInfo($request);
        return redirect('/manage-breaking-news')->with('message', 'Update Successfully');
    }

    public function deleteBreakingNews(Request $request){
        $breaking = Breaking::find($request->id);
        $breaking->delete();

        return redirect('/manage-breaking-news')->with('message', 'Delete Successfully');
    }
}
