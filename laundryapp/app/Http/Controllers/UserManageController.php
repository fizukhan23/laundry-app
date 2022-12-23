<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\User;

class UserManageController extends Controller
{
    //add user
 public function adduser(Request $request){
     return view('user.adduser');
     }

     public function saveuser(Request $request){
    //dd($request->input());
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->city = $request->city;
    $user->number = $request->mob;
    $res = $user->save();
    if($res){
        return back()->with('success','user added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }

     //view user

     public function viewuser(){
        $user = User::all();
        return view('user.listuser',compact('user'));
     }

     public function edituser($id){
         $data= User::findOrFail($id);
         
        return view('user.edituser',compact('data'));
     }

     public function updateuser(Request $request,$id){
         $data= User::findOrFail($id);
         $data->name = $request->name;
         $data->email = $request->email;
         $data->city = $request->city;
         $data->number = $request->mob;
         $data->update();
         $user = User::all();
        return view('user.listuser',compact('user'));
     }
      public function deleteuser(Request $request , $id){
         $data= User::findOrFail($id);
         $data->delete();
         return back()->with('success','User deleted successfully');
     }


 

      

}
