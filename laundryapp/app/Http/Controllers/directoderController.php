<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\directorder;
use App\Models\User;

class directoderController extends Controller
{
    //
     public function listorder(){
        $user = User::all();
        return view('order.listorder',compact('user'));
     }
     
    
 public function directorder(Request $request,$id){
    $directorder = directorder::where('user_id',$id)->get();
    return view('order.listdirect',compact('directorder'));
     }

   
  public function updatedirectorder(Request $request,$id){
       $data= directorder::findOrFail($id);
        $data->user_id = $request->user_id;
       $data->endtime = $request->endtime;
       $data->quantity = $request->endtime;
       $data->starttime = $request->starttime;
        $data->date = $request->date;
       $data->status = $request->status;
     
       $data->update();
       $directorder = directorder::all();
           return view('order.listdirect',compact('directorder'));
       }

 public function deletedirectorder($id){
       
          $data= directorder::findOrFail($id);
          $data->delete();
          return back()->with('success','list deleted successfully');
      }

    public function statusdirectorder($id){
           $data= directorder::findOrFail($id);
           return view('order.statuslistdirect',compact('data'));
      }
 



}