<?php


//home when user is not logged in
Route::get('/', function () {
    return Redirect::to('login');
});

//login page
Route::get('/login', function () {
    return view('login');
});

//home page after logging in
Route::get('/home', function () {
    return view('home');
});

//registration page
Route::get('/register', function () {
    return view('register');
});

//user profile page
Route::get('/profile', function () {
    return view('profile');
});

//password reset page
Route::get('/reset', function () {
    return view('reset');
});

//registration form submit action
Route::post('/register_action','RegisterController@store');

//login page submit action
Route::post('/login_check','RegisterController@login');


//new event submit action
Route::post('/insert','CreatesController@add');

//new blog submit action
Route::post('/enter','BlogsController@plus');

//comments submit action
Route::post('/post','CreatesController@post');
//payment submit action
Route::post('/entry','CreatesController@entry');

Route::post('/added','CreatesController@replied');


//Fetching all blog data
Route::get('/vblog','BlogsController@blog');

//read single blog
Route::get('/readpost/{id}','BlogsController@read');

//delete single blog
Route::get('/deletepost/{id}','BlogsController@delete');

//read single reply
Route::get('/vblog/{id}','BlogsController@reads');

//Fetching all events data
Route::get('/home','CreatesController@home');

//read single event
Route::get('/read/{id}','CreatesController@read');

//delete single event
Route::get('/delete/{id}','CreatesController@delete');

//logout action
Route::get('/logout',function () {
    Auth::logout();

    return Redirect::to('login');
})->middleware("auth");

//create new event page
Route::get('/event', function () {
    return view('event');
});

//create new blog page
Route::get('/blog', function () {
    return view('blog');
});


//showing top event page
Route::get('/top', 'CreatesController@top');

//showing payment page
Route::get('/payment', function () {
    return view('payment');
});



