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

class afterSignIn extends Controller
{
    public function search(){

    return view('search');

    }

    public function myAccount(){

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
//     return view('displayPage');


}


    public function EditProfile(){

        return 'EditProfile';
    }

    public function Resume(){

        return 'my resume';

    }

}
