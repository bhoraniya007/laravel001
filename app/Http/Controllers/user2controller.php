<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user2controller extends Controller
{    //variebal
    function test(){
    $i="hasan";
    return  view('test',["name"=>$i]);
}
  //array.
 function mytest () {
   $name="Ali";
    $user = ['Ali', 'Ahmed', 'Mahedi'];
    return view('test', ['name'=>$name,'users'=>$user]);
}

  }

