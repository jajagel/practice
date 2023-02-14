<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from users';
    }
    public function show($id){
        $data=array(
        "id"=>$id,
        "name"=>"Jazhiel Laruan",
        "age"=>20,
        "email"=>"jaja@gmail.com"
         );
        return view('users', $data); 
        }
}

