<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;
use Auth;


class RegisterController extends Controller
{
   //Register new user .***Note:Getting the data from model -Register
    public function store(){
    	$data=Input::except(array('_token'));
    	//var_dump($data);

    	$rule=array(
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
    	);

    	$validator=Validator::make($data,$rule);

    	if($validator->fails()){
            return Redirect::to('register')->withErrors($validator);
    	}else{
               Register::formstore(Input::except(array('_token')));

               return Redirect::to('register')->with('success','Successfully Registered');
    	}
    }
//Login for  user .***Note:Getting the data from model -Register
    public function login(){
        $data=Input::except(array('_token'));
        //var_dump($data);
       

        $rule=array(
        'email'=>'required',
        'password'=>'required'
        );

        $validator=Validator::make($data,$rule);

        if($validator->fails()){
            return Redirect::to('/login')->withErrors($validator);
        }else{
           //$data=Input::except(array('_token'));

             $userdata=array(
        'email'=>Input::get('email'),
        'password'=>Input::get('password')
        );
             //var_dump($userdata);

           if(Auth::attempt( $userdata)){
            return Redirect::to('home');
            
           }else{
            return Redirect::to('login');

            
           }


        }
    }

  

    
}
