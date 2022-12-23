<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\Rating;



class RatingManageController extends Controller
{
     public function Rating(Request $request){
     $Rating = Rating::all();
     return view('Rate.Rating',compact('Rating'));
     }

     public function saveRating(Request $request){
    //dd($request->input());
     $Rating = new Rating;
     $Rating->Username = $request->username;
     $Rating->Rating = $request->rating;
     $Rating->Description = $request->Description;
     
     $res = $Rating->save();
     if($res){
        return back()->with('success','successfull');
        
     }
    else{
         return back()->with('fail','error');
     }
     //return view('listuser');
      }

public function editRating($id){
           $data= Rating::findOrFail($id);
         return view('Rate.editRating',compact('data'));
      }
      
 public function updateRating(Request $request,$id){
       $data= Rating::findOrFail($id);
        $data->Username = $request->username;
        $data->Rating = $request->rating;
       $data->Description = $request->Description;
       $data->update();
        $Rating = Rating::all();
           return view('Rate.Rating',compact('Rating'));
       }

 public function deleteRating($id){
           $data= Rating::findOrFail($id);
           $data->delete();
           return back()->with('success','deleted successfully');
       }


}
