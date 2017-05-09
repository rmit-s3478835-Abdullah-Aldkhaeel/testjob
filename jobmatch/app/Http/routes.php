<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/job/{id}', ['as'=>'home.job', 'uses'=>'AdminJobsController@job']);
Route::get('/profile/{id}', ['as'=>'home.profile', 'uses'=>'AdminProfilesController@profile']);

Route::resource('admin/users', 'AdminUsersController');
Route::resource('admin/jobs', 'AdminJobsController');
Route::resource('admin/profiles', 'AdminProfilesController');
//Route::get('/admin', function(){
//
//    return view('admin.index');
//});
//
//Route::resource('admin/users', 'AdminUsersController');
//Route::resource('admin/jobs', 'AdminJobsController');

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){

        return view('admin.index');
    });

//    Route::resource('admin/users', 'AdminUsersController');
//    Route::resource('admin/jobs', 'AdminJobsController');
//    Route::resource('admin/profiles', 'AdminProfilesController');

});
/*Route::get('/');*/
Route::get('/search','afterSignIn@search');
Route::get('/myAccount','afterSignIn@myAccount');
Route::get('/contact','afterSignIn@contact');
Route::get('/logOut','logOut@logOut');
Route::post('search','afterSignIn@searchResult');
Route::post('editProfile','afterSignIn@EditProfile');
Route::get('/resume','afterSignIn@Resume');
Route::get('/displayJob','displayPage@displayJob');
Route::get('/displayDes','displayPage@displayDes');
Route::get('/displayApply','displayPage@displayApply');
Route::get('admin/job_profile','Job_ProfileController@jobProfileDetails');
