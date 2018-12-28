<?php

Route::get('/404',[
    'uses' => 'ErrorHandleController@error404',
    'as'   => '404'
]);

Route::get('/405',[
    'uses' => 'ErrorHandleController@error405',
    'as'   => '405'
]);


//Front-end//
Route::get('/',[
    'uses' => 'ProjectController@index',
    'as'   => '/'
]);

Route::get('/category-blog/{id}/{name}',[
    'uses' => 'ProjectController@categoryBlog',
    'as'   => 'category-blog'
]);

Route::get('/blog-details/{id}',[
    'uses' => 'ProjectController@blogDetails',
    'as'   => 'blog-details'
]);
//
//Route::get('/blog-details-two/{id}',[
//    'uses' => 'ProjectController@blogDetailsTwo',
//    'as'   => 'blog-details-two'
//]);

Route::get('/sign-up',[
    'uses' => 'SignUpController@index',
    'as'   => 'sign-up'
]);

Route::post('/new-sign-up',[
    'uses' => 'SignUpController@newSignUp',
    'as'   => 'new-sign-up'
]);

Route::post('/visitor-logout',[
    'uses' => 'SignUpController@visitorLogout',
    'as'   => 'visitor-logout'
]);

Route::get('/visitor-login',[
    'uses' => 'SignUpController@visitorLogin',
    'as'   => 'visitor-login'
]);

Route::post('/visitor-sign-in',[
    'uses' => 'SignUpController@visitorSignIn',
    'as'   => 'visitor-sign-in'
]);

Route::post('/new-comment',[
    'uses' => 'CommentController@newComment',
    'as'   => 'new-comment'
]);

Route::post('/add-blogId-session-by-login',[
    'uses' => 'CommentController@addBlogIdSession',
    'as'  => 'add-blogId-session-by-login'
]);

Route::post('/add-blogId-session-by-register',[
    'uses' => 'CommentController@addBlogIdSessionbyRegister',
    'as'  => 'add-blogId-session-by-register'
]);
//
//Route::post('/new-comment-two',[
//    'uses' => 'CommentController@newCommentTwo',
//    'as'   => 'new-comment-two'
//]);

Route::get('/user-contact',[
    'uses' => 'ContactController@userContact',
    'as'   => 'user-contact'
]);

Route::post('/new-contact',[
    'uses' => 'ContactController@newContact',
    'as'   => 'new-contact'
]);

Route::get('/user-written',[
    'uses' => 'OtherController@userWritten',
    'as'   => 'user-written'
]);

Route::post('/new-user-written',[
    'uses' => 'OtherController@newUserWritten',
    'as'   => 'new-user-written'
]);

Route::get('/show-written',[
    'uses' => 'OtherController@showWritten',
    'as'   => 'show-written'
]);

Route::get('/written-details/{id}',[
    'uses' => 'OtherController@writtenDetails',
    'as'   => 'written-details'
]);

Route::get('/',[
    'uses' => 'MembershipController@indexTwo',
    'as'   => '/'
]);

Route::post('/new-member',[
    'uses' => 'MembershipController@newMember',
    'as'   => 'new-member'
]);

Route::get('/search-view',[
    'uses' => 'ProjectController@searchView',
    'as'   => 'search-view'
]);

Route::post('/search-ajax',[
    'uses' => 'ProjectController@search',
    'as'   => 'search-ajax'
]);

Route::get('/email-check/{email}',[
    'uses' => 'SignUpController@emailCheck',
    'as'   => 'email-check'
]);


//Back-end//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search/{searchKey}',[
    'uses' => 'HomeController@Search',
    'as'  => 'search'
]);

Route::group(['middleware' => 'pabel'], function (){

//    Route::post('/search-home',[
//        'uses' => 'CategoryController@searchHome',
//        'as'  => 'search-home'
//    ]);

    Route::get('/category/add-category',[
        'uses' => 'CategoryController@addCategory',
        'as'  => 'add-category',
    ]);

    Route::post('/category/new-category',[
        'uses' => 'CategoryController@newCategory',
        'as'  => 'new-category'
    ]);

    Route::get('/category/manage-category',[
        'uses' => 'CategoryController@manageCategory',
        'as'  => 'manage-category'
    ]);

    Route::get('/category/edit-category/{id}',[
        'uses' => 'CategoryController@editCategory',
        'as'  => 'edit-category'
    ]);

    Route::post('/category/update-category',[
        'uses' => 'CategoryController@updateCategory',
        'as'  => 'update-category'
    ]);

    Route::post('/category/delete-category',[
        'uses' => 'CategoryController@deleteCategory',
        'as'  => 'delete-category'
    ]);
//Blog One//
    Route::get('/blog/add-blog-one',[
        'uses' => 'BlogController@addBlogOne',
        'as'  => 'add-blog-one'
    ]);

    Route::post('/blog/new-blog-one',[
        'uses' => 'BlogController@newBlogOne',
        'as'  => 'new-blog-one'
    ]);

    Route::get('/blog/manage-blog-one',[
        'uses' => 'BlogController@manageBlogOne',
        'as'  => 'manage-blog-one'
    ]);

    Route::get('/blog/edit-blog-one/{id}',[
        'uses' => 'BlogController@editBlogOne',
        'as'  => 'edit-blog-one'
    ]);

    Route::post('/blog/update-blog-one',[
        'uses' => 'BlogController@updateBlogOne',
        'as'  => 'update-blog-one'
    ]);

    Route::post('/blog/delete-blog-one',[
        'uses' => 'BlogController@deleteBlogOne',
        'as'  => 'delete-blog-one'
    ]);
//Blog Two//
    Route::get('/blog/add-blog-two',[
        'uses' => 'BlogController@addBlogTwo',
        'as'  => 'add-blog-two'
    ]);

    Route::post('/blog/new-blog-two',[
        'uses' => 'BlogController@newBlogTwo',
        'as'  => 'new-blog-two'
    ]);

    Route::get('/blog/manage-blog-two',[
        'uses' => 'BlogController@manageBlogTwo',
        'as'  => 'manage-blog-two'
    ]);

    Route::get('/blog/edit-blog-two/{id}',[
        'uses' => 'BlogController@editBlogTwo',
        'as'  => 'edit-blog-two'
    ]);

    Route::post('/blog/update-blog-two',[
        'uses' => 'BlogController@updateBlogTwo',
        'as'  => 'update-blog-two'
    ]);

    Route::post('/blog/delete-blog-two',[
        'uses' => 'BlogController@deleteBlogTwo',
        'as'  => 'delete-blog-two'
    ]);

    Route::get('/manage-comment',[
        'uses' => 'CommentController@manageComment',
        'as'  => 'manage-comment'
    ]);

    Route::get('/unpublished-comment/{id}',[
        'uses' => 'CommentController@unpublishedComment',
        'as'  => 'unpublished-comment'
    ]);

    Route::get('/published-comment/{id}',[
        'uses' => 'CommentController@publishedComment',
        'as'  => 'published-comment'
    ]);

    Route::post('/delete-comment',[
        'uses' => 'CommentController@deleteComment',
        'as'  => 'delete-comment'
    ]);

    Route::get('/see-contact',[
        'uses' => 'ContactController@seeContact',
        'as'  => 'see-contact'
    ]);

    Route::post('/delete-contact',[
        'uses' => 'ContactController@deleteContact',
        'as'  => 'delete-contact'
    ]);

    Route::get('/see-written',[
        'uses' => 'OtherController@seeWritten',
        'as'   => 'see-written'
    ]);

//    Route::get('/edit-written',[
//        'uses' => 'OtherController@editWritten',
//        'as'  => 'edit-written'
//    ]);
//
//    Route::post('/update-written',[
//        'uses' => 'OtherController@updateWritten',
//        'as'  => 'update-written'
//    ]);
//
//    Route::post('/delete-written',[
//        'uses' => 'OtherController@deleteWritten',
//        'as'  => 'delete-written'
//    ]);

    Route::get('/unpublished-written/{id}',[
        'uses' => 'OtherController@unpublishedWritten',
        'as'  => 'unpublished-written'
    ]);

    Route::get('/published-written/{id}',[
        'uses' => 'OtherController@publishedWritten',
        'as'  => 'published-written'
    ]);

//    Breaking News section //
    Route::get('/add-breaking-news',[
        'uses' => 'BreakingNewsController@addBreakingNews',
        'as'  => 'add-breaking-news'
    ]);

    Route::post('/new-breaking-news',[
        'uses' => 'BreakingNewsController@newBreakingNews',
        'as'  => 'new-breaking-news'
    ]);

    Route::get('/manage-breaking-news',[
        'uses' => 'BreakingNewsController@manageBreakingNews',
        'as'  => 'manage-breaking-news'
    ]);

    Route::get('/edit-breaking-news/{id}',[
        'uses' => 'BreakingNewsController@editBreakingNews',
        'as'  => 'edit-breaking-news'
    ]);

    Route::post('/update-breaking-news',[
        'uses' => 'BreakingNewsController@updateBreakingNews',
        'as'  => 'update-breaking-news'
    ]);

    Route::post('/delete-breaking-news',[
        'uses' => 'BreakingNewsController@deleteBreakingNews',
        'as'  => 'delete-breaking-news'
    ]);

    Route::get('/show-breaking-news/{$id}',[
        'uses' => 'BreakingNewsController@showBreakingNews',
        'as'  => 'show-breaking-news'
    ]);

    Route::get('/add-international-news',[
        'uses' => 'InternationalNewsController@addInternationalNews',
        'as'  => 'add-international-news'
    ]);

    Route::post('/new-international-news',[
        'uses' => 'InternationalNewsController@newInternationalNews',
        'as'  => 'new-international-news'
    ]);

    Route::get('/manage-international-news',[
        'uses' => 'InternationalNewsController@manageInternationalNews',
        'as'  => 'manage-international-news'
    ]);

    Route::get('/edit-international-news/{id}',[
        'uses' => 'InternationalNewsController@editInternationalNews',
        'as'  => 'edit-international-news'
    ]);

    Route::post('/update-international-news',[
        'uses' => 'InternationalNewsController@updateInternationalNews',
        'as'  => 'update-international-news'
    ]);

    Route::post('/delete-international-news',[
        'uses' => 'InternationalNewsController@deleteInternationalNews',
        'as'  => 'delete-international-news'
    ]);

    Route::get('/show-international-news/{id}',[
        'uses' => 'InternationalNewsController@showInternationalNews',
        'as'  => 'show-international-news'
    ]);

//    Membership Section//

    Route::get('/see-member',[
        'uses' => 'MembershipController@seeMember',
        'as'  => 'see-member'
    ]);

    Route::post('/delete-member',[
        'uses' => 'MembershipController@deleteMember',
        'as'  => 'delete-member'
    ]);

});
