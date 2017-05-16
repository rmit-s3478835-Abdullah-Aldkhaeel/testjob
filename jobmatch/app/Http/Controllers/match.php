<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Profile;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class match extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function matchJob(){

        return 'matchResult';

    }
}
