<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     return "this is my page";
    // }

    public function param(Request $request)
        //  return "name:$name,id:$id" ;
        //  return $name;
        //  return $id;
        {


            // $name = $request->name;
            // // if($name===null){
            // //     return "name is missing";

            // // }
            // return $name;
            $id = $request->id;
            return $id;

        }
    }
