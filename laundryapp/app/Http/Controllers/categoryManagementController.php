<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\category;
class categoryManagementController extends Controller
{
    //add user
   public function category(Request $request){
    
    return view('service.category');
     }

     public function savecategory(Request $request){
    //dd($request->input());
     $category = new category;
     $category->name = $request->name;
     $category->status = $request->status;
     $res = $category->save();
     if($res){
        return back()->with('success','category added successfully');
        
     }
    else{
         return back()->with('fail','error');
     }
     //return view('listuser');
      }

     public function viewcategory(){
         $category = category::all();
         return view('service.category',compact('category'));
     }
     
       public function editcategory($id){
         $data= category::findOrFail($id);
         
        return view('service.editcategory',compact('data'));
     }
 public function updatecategory(Request $request,$id){
          $data= category::findOrFail($id);
          $data->name = $request->name;
          $data->status = $request->status;
        
         $data->update();
          $category = category::all();
         return view('service.category',compact('category'));
      }
       public function deletecategory($id){
       
          $data= category::findOrFail($id);
          $data->delete();
          return back()->with('success','deleted successfully');
      }
    }




