<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\subcategory;
use App\Models\category;

class subCManagmentController extends Controller
{
   
  //add user
   public function subcategory(Request $request){
      $category1 = category::all();
     $datas = DB::table('subcategory')->join('category','subcategory.category_id','=','category.id')
     ->select('subcategory.*','category.name as catname')->get();
    return view('service.subcategory',compact('category1','datas'));
     }

     public function savesubcategory(Request $request){
    //dd($request->input());
     $subcategory = new subcategory;
     $subcategory->category_id = $request->category1;
     $subcategory->name = $request->name;
     $subcategory->status = $request->status;
     $res = $subcategory->save();
     if($res){
        return back()->with('success','subcategory added successfully');
        
     }
    else{
         return back()->with('fail','error');
     }
     //return view('listuser');
      }
   

//   public function viewsubcategory(){
//          $category1 = category::all();
//           $datas = DB::table('subcategory')->join('category','subcategory.category_id','=','category.id')
//          ->select('subcategory.*','category.name as catname')->get();
//          return view('service.subcategory',compact('category1','datas'));
//      }
     
     
   public function editsubcategory($id){
         $data= subcategory::findOrFail($id);
         $category1 = category::all();
        return view('service.editsubcategory',compact('category1','data'));
     }


    public function updatesubcategory(Request $request,$id){
        $datas = DB::table('subcategory')->join('category','subcategory.category_id','=','category.id')
         ->select('subcategory.*','category.name as catname')->get();

           $data= subcategory::findOrFail($id);
        //  dd($request->category1);
          $data->category_id = $request->category1;
           $data->name = $request->name;
           $data->status = $request->status;
           $data->update();
          $category1 = category::all();
          return view('service.subcategory',compact('category1','datas'));
       }
       
     public function deletesubcategory($id){
       $data= subcategory::findOrFail($id);
          $data->delete();
          return back()->with('success','subcategory deleted successfully');
       }   
}
