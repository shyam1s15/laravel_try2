<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function mail(){
        $details = [
            'title' => 'lara mail',
            'body' => 'be my friend u will be in profit, be my enemy i will get much profit'
        ];
    
        \Mail::to('jenishdabhi707@gmail.com')->send(new \App\Mail\SendMailable($details));    
    }
    // this function will only called for entry well no authenication is required here.
    public function getSignUp(){
        return view('layouts.logups.sign_up');
    }

    // in this below function we need to authenticate as well database queries must be checked here

    public function postSignUp(){
        $con = \mysqli_connect('localhost','shyam','123');
        $users = \DB::table('students')->get();
        
        $users2 = \DB::table('students')->where('email','=','shyam1ss15@gmail.com')->get();

        // return view('layouts.logups.test', ['users' => $users2]);
        if(count($users2) == 0){
            return "nope";
        }
        return count($users2);
    }
}
