<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use App\Job;
use App\Profile;
use App\Photo;
use App\User;
use App\Jobcategory;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;


class afterSignIn extends Controller
{
    public function search(){

    return view('search');

    }



    public function myAccount()
    {

        return view('MyAccount');
    }

    public function contact(){

        return view('contact');
    }

    public function searchResult( Request $request){

        $jobcategory=new Jobcategory();

        $allcategories=$jobcategory->getall();

        $choice=$request->input('job');

        foreach($allcategories  as $category){

            if($category->category_name==$choice){

                $jobs=$jobcategory->getjobs($category->id);

                    return view('displayPage',compact('jobs'));
                
                }

        }
}
    public function EditProfile(Request $request)
        {
            $success = "successfull change your personal profile";
            $pwdR = $request->input('pwd');
            $emailR = $request->input('email');

            $userInf = AUTH::user();
            $userId = $userInf->id;
            $num = DB::update('UPDATE users SET email= ?,password= ? WHERE id= ?', array($emailR, $pwdR, $userId));

            $validator = Validator::make($request->all(), [
                    'pwd' => 'required|max:255',
                    'email' => 'required|unique:users',array('regex:/\w{6,16}@\w{1,}\.\w{2,3}/i')
                ]
            );
            if ($validator->fails()) {

                return redirect('/myAccount')->withErrors($validator);
            }

            if ($num) {

                return redirect('/changeProfile');

            }
        }
    public function changeProfile(){

       $user=AUTH::user();

       return view('afterChangeProfile',compact('user'));
    }

    public function Resume(){

        return 'my resume';

    }

}
