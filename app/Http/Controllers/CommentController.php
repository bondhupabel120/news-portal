<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Visitor;
use DB;
use Session;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function newComment(Request $request){
        Comment::saveCommentInfo($request);

        return redirect('/blog-details/'.$request->blog_id)->with('message', 'Your comment post successfully');
    }

//    public function newCommentTwo(Request $request){
//        Comment::saveCommentInfoTwo($request);
//
//        return redirect('/blog-details-two/'.$request->blog_id)->with('message', 'Your comment post successfully');
//    }

    public function deleteComment(Request $request){
        Comment::deleteCommentInfo($request);
        return redirect('/manage-comment')->with('message','Delete Successfully');
    }

    public function manageComment(){
        return view('admin.comment.manage-comment',[
            'comments'   => DB::table('comments')
                ->join('visitors', 'comments.visitor_id', '=', 'visitors.id')
                ->join('blog_ones', 'comments.blog_id', '=', 'blog_ones.id')
                ->select('comments.*', 'visitors.first_name',  'visitors.last_name', 'blog_ones.blog_one_title')
                ->orderBy('comments.id', 'desc')
                ->get()
        ]);
    }

    public function unpublishedComment($id){
        $comment = Comment::find($id);
        $comment->publication_status = 0;
        $comment->save();

        return redirect('/manage-comment');
    }

    public function publishedComment($id){
        $comment = Comment::find($id);
        $comment->publication_status = 1;
        $comment->save();

        return redirect('/manage-comment');
    }

    public function addBlogIdSession(Request $request){
        $blog_id = $request->session_blog_id;
        Session::put('blog_id', $blog_id);
        return redirect('/visitor-login');
    }

    public function addBlogIdSessionbyRegister(Request $request){
        $blog_id = $request->session_blog_id;
        Session::put('blog_id', $blog_id);
        return redirect('/sign-up');
    }
}
