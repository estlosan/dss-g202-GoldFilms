<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


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

    public function AddUser(){
        return view('create_user');
    }


    public function EditUser($id){
        $user=User::FindOrFail($id);
        return view('edit_user',['user' => $user]);
    }

    public function DeleteUser($id){
        $user=User::findOrFail($id);
        $user->delete();

        return Redirect::to('/users');
    }


    public function EditUserValidate(Request $request,$id){
        $user=User::findOrFail($id);
        $user->username=$request->input('nombre');
        $user->email=$request->input('email');
        if($user->password != NULL){
        $user->password=$request->input('password');
        }
        
        $user->save();

       return Redirect::to('/users');

    }

    public function ValidateAddUser(Request $request){

        $this->validate($request,[
            'email' => 'required',
            'nombre' =>'required',
            'password' => 'required'
        ]);
        $user=new User ;
        $user->username = $request->input('nombre');
        $user->email= $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return Redirect::to('/users');

    }
    //
}
