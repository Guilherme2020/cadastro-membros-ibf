<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;


class UsersController extends Controller
{
    public function index(){
        $users = User::all();
//        echo "<pre>";
//            print_r($membros);
//        echo "</pre>";

//        return view('admin.membros.index',compact('membros'));
        return view('admin.membros.index',$users);

    }

    public function  show($id){


        $users = User::find($id);
        echo "<pre>";
            print_r($users);
        echo "</pre>";

    }
}
