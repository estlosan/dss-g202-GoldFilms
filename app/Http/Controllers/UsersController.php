<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function showUsers(){
        $users=DB::table('users')->paginate(5);
        return view('users',['users' =>$users]);
    }
    public function showUser($id){
        $user=User::findOrFail($id);
        return view('user',['user' => $user]);
    }
    //
}
