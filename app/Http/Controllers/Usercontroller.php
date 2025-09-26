<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Usercontroller extends Controller
{
    function mytest(){
        return view('user');
    }

    function username($name){
        return "hello is".$name;
    }
    function usernm($name){
        return view('user2',['name'=>$name]);
    }


//ye chek karata he ki file exists karti he ki nahi .
function login() {
    if (View::exists('admin.login')) {
        return view('admin.login');
    } else {
        echo "View file not exists";
    }
}

function userhome(){
    return view('home');
}
function userabut(){
    return view('abut');
}

}
