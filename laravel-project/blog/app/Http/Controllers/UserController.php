<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){
        $request->validate([
            'username'=>'required | min:3| max:15',
            'email'=>'required | email',
            'city'=>'required',
            'skill'=>'required'
        ],[
            'username.required'=>'username can not be empty',
            'username.min'=>'username  min characters should be 3',
            'email.email'=>'this email is not valids',
        ]);
        



        
        return $request;
    }
    
   
    
}

