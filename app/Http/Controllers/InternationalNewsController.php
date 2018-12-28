<?php

namespace App\Http\Controllers;

use App\International;
use Illuminate\Http\Request;

class InternationalNewsController extends Controller
{
    public function addInternationalNews(){
        return view('admin.international.international-news');
    }

    public function newInternationalNews(Request $request){
        International::create($request->all());
        return redirect('/add-international-news')->with('message', 'News Save Successfully');
    }

    public function manageInternationalNews(){
        return view('admin.international.manage-international',[
            'internationals' => International::all(),
        ]);
    }

    public function editInternationalNews($id){
        return view('admin.international.edit-international',[
            'international' => International::find($id),
        ]);
    }

    public function updateInternationalNews(Request $request){
        International::updateInternationalNewsInfo($request);
        return redirect('/manage-international-news')->with('message', 'Update Successfully');
    }

    public function deleteInternationalNews(Request $request){
        $international = International::find($request->id);
        $international->delete();

        return redirect('manage-international-news')->with('message', 'Delete Successfully');
    }
}
