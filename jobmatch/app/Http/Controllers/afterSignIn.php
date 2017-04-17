<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function searchResult(){

        return 'The result';
    }


    public function EditProfile(){

        return 'EditProfile';
    }

    public function Resume(){

        return 'my resume';

    }

}
