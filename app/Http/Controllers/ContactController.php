<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Category;
use App\Breaking;
use App\International;
use Session;
use DB;

class ContactController extends Controller
{
    public function userContact(){
        return view('front.contact.contact',[
            'categories'            => Category::where('publication_status', 1)->get(),
            'category_categories'   => Category::where('publication_status', 1)->take(5)->get(),
            'breakings'             => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'        => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function newContact(Request $request){
        Contact::newContactInfo($request);
        return redirect('/user-contact')->with('message', 'Your message is successfully sent');
    }

    public function seeContact(){
        return view('admin.contact.see-contact',[
            'contacts' => DB::table('contacts')
                ->select('contacts.*')
                ->orderBy('contacts.id', 'desc')
                ->get()
        ]);
    }

    public function deleteContact(Request $request){
        Contact::deleteContactInfo($request);
        return redirect('/see-contact')->with('message','Delete Successfully');
    }
}
