<?php
use App\Http\Requests\JobsRequest;
use App\Job;
use App\Photo;
use App\Joblist;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
Route::get('/myAccountEmployer', function (){
    return view ('myAccountEmployer');
});
Route::any('/createJob','Controller@createJob');
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
Route::get('/myAccount',function(){

    $user=AUTH::user();
    $userPass=$user->password;
    $userEm=$user->email;
    $userInfo=[
       'userP'=> $userPass,
        'usere'=>$userEm
    ];
    return view('MyAccount',compact('userInfo'));

});
Route::get('/changeProfile','afterSignIn@changeProfile');
Route::get('/contact','afterSignIn@contact');
Route::get('/logOut','logOut@logOut');
Route::post('search','afterSignIn@searchResult');
Route::post('editProfile','afterSignIn@EditProfile');
Route::post('matchJob','match@matchJob');
Route::get('/resume','afterSignIn@Resume');
Route::get('/displayJob','displayPage@displayJob');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');


Route::any('test',function(){


});
Route::get('/displayApply','displayPage@displayApply');



Route::get('/displayDes/{number}',function($number) {
    
    $jobs=new Joblist();
    
    $all=$jobs->getall();

    foreach ($all as $job){

        if($job->id==$number){

            return view('displayDes',compact('job'));
        }

    }

//    return view('displayDes');
});

Route::get('admin/job_profile','Job_ProfileController@jobProfileDetails');

