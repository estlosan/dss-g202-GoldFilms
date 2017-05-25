<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Input;

class UsersController extends Controller
{
    public function showUsers(){
        $users=DB::table('users')->paginate(5);
        return view('User.users',['users' =>$users]);
    }
    public function showUser($id){
        $user=User::findOrFail($id);
        return view('User.user',['user' => $user]);
    }

    public function AddUser(){
        return view('User.create_user');
    }


    public function EditUser($id){
        $user=User::FindOrFail($id);
        return view('User.edit_user',['user' => $user]);
    }

    public function DeleteUser($id){
        $user=User::findOrFail($id);
        $user->delete();

        return Redirect::to('/users');
    }


    public function EditUserValidate(Request $request,$id){
        $this->validate($request,[
            'email' => 'required',
            'nombre' =>'required',
            'password' => 'required'
        ]);
        
        $user=User::findOrFail($id);
        $user->username=$request->input('nombre');
        $user->email=$request->input('email');
            if($user->password != $request->input('password')){
                $user->password=bcrypt($request->input('password'));
            }

        $name=$_FILES['fileToUpload']['name'];  
        $temp_name=$_FILES['fileToUpload']['tmp_name'];    

        if(isset($name)){
            if(!empty($name)){
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                }
                else {
                    return view('error_imagen');
                }      
                $namefile = $user->username. '.' . 'jpg';
                $location = '../public/images/Users/';      
                if(move_uploaded_file($temp_name, $location.$namefile)){

                }
            }       
        }  else {
            return view('error_imagen');
        }
        $user->save();

        if(\Auth::user()->email == "admin@hotmail.com"){
            return Redirect::to('/users');
        }
        else{
            return Redirect::to('/principal');
        }
    }

    public function ValidateAddUser(Request $request){

        $this->validate($request,[
            'email' => 'required|unique:users',
            'nombre' =>'required',
            'password' => 'required'
        ]);
        $user=new User ;
        $user->username = $request->input('nombre');
        $user->email= $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $name=$_FILES['fileToUpload']['name'];  
        $temp_name=$_FILES['fileToUpload']['tmp_name'];

        if(isset($name)){
            if(!empty($name)){
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                }
                else {
                    return view('error_imagen');
                }      
                $namefile = $user->username. '.' . 'jpg';
                $location = '../public/images/Users/';      
                if(move_uploaded_file($temp_name, $location.$namefile)){

                }
            }       
        }  else {
            return view('error_imagen');
        }

        $user->save();

        return Redirect::to('/users');

    }
}
