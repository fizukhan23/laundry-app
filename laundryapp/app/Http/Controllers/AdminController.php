<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;

use DB;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function login(Request $request){
            return view('login');
     }
     public function adminlogin(Request $request){
    $data=$request->input();
      $email=$data['username'];
      $password=$data['password'];
      $admin =DB::table('admin')->where('email',$email)->first();
      if($admin){

     
      if($admin->email==$email && Hash::check($password,$admin->password)){
            $set_array=array('id'=>$admin->id,'username'=>$admin->email,'name'=> $admin->name);
            $request->session()->put('admin_session',$set_array);
           
           return view('dashboard');
           
      }else{
            // return back()->with('success', 'Success! User created');
            return back()->with('fail', 'Invalid password');
      }
       }
       else{
          return back()->with('fail', 'Invalid email'); 
       }

      
     }


}