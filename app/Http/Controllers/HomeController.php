<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;

class HomeController extends Controller
{
    Public function home(String $name){
        // $name="luna";
        $users=User::query()->get();
        return view('home',compact('name','users'));
    }
}
