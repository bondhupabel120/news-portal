<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use App\Category;
use App\Breaking;
use App\International;
use Illuminate\Support\Facades\Session;

class SignUpController extends Controller
{
    public function index(){


        return view('front.user.sign-up',[
            'categories'          => Category::where('publication_status', 1)->get(),
            'category_categories' => Category::where('publication_status', 1)->get(),
            'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function newSignUp(Request $request){


        Visitor::saveVisitorInfo($request);

        if(Session::get('blog_id')) {
            return redirect('/blog-details/'.Session::get('blog_id'));
            Session::forget('blog_id');
        } else {
            return redirect('/');
        }

    }

    public function visitorLogout(){
        Session::forget('visitorId');
        Session::forget('visitorImage');
        Session::forget('visitorName');

        return redirect('/');
    }

    public function visitorLogin(){


        return view('front.user.sign-in',[
            'categories'          => Category::where('publication_status', 1)->get(),
            'category_categories' => Category::where('publication_status', 1)->get(),
            'breakings'           => Breaking::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'internationals'      => International::where('publication_status', 1)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function visitorSignIn(Request $request){

        $visitor = Visitor::where('email_address', $request->email_address)->first();
        if($visitor){
            if (password_verify($request->password, $visitor->password)) {
                Session::put('visitorId', $visitor->id);
                Session::put('visitorImage', $visitor->image);
                Session::put('visitorName', $visitor->first_name.' '.$visitor->last_name);

                if(Session::get('blog_id')) {
                    return redirect('/blog-details/'.Session::get('blog_id'));
                    Session::forget('blog_id');
                } else {
                    return redirect('/');
                }

            } else {
                return redirect('/visitor-login')->with('message', 'Password not valid');
            }
        }else{
            return redirect('/visitor-login')->with('message', 'Email address not valid');
        }
    }
//    This function is for row ajax//
//    public function emailCheck($email){
//        $visitor = Visitor::where('email_address', $email)->first();
//        if ($visitor){
//            echo '<span class="text-danger">Email address already exist</span>';
//        }else{
//            echo 'Email address available';
//        }
//    }

    public function emailCheck($email){
        $visitor = Visitor::where('email_address', $email)->first();
        if ($visitor){
            return json_encode('<span class="text-danger">Email address already exist</span>');
        }else{
            return json_encode('Email address available');
        }
    }

}
