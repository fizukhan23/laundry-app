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
use App\Models\service;


class ServiceController extends Controller
{
    //
    //add user
    public function service(Request $request){
      $category1 = category::all();
      $datas = DB::table('service')->join('category','service.category_id','=','category.id')
         ->join('subcategory','service.subcategory_id','=','subcategory.id')
      ->select('service.*','category.name as catname','subcategory.name as subname')->orderBy('subcategory_id', 'ASC')->get();
      $subcategory1 = subcategory::all();
      
    return view('service.service',compact('category1','datas','subcategory1'));

      }

      public function saveservice(Request $request){
      //dd($request->input());
       $service = new service;
       $service->category_id = $request->category1;
       $service->subcategory_id = $request->subcategory1;
       $service->name = $request->name;
       $service->price = $request->price;
       $service->status = $request->status;
    //   $service->image = $request->image;
       if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('service')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/icons/").$row->image;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
           
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/icons'), $image);
        $service->image=$image;
        }
       $res = $service->save();
       if($res){
         return back()->with('success','service created successfully');
        
      }
     else{
           return back()->with('fail','error');
       }
     //return view('listuser');
       }


public function editservice($id){
         $data= service::findOrFail($id);
         $category1 = category::all();
         $subcategory1 = subcategory::all();
        return view('service.editservice',compact('category1','data','subcategory1'));
     }


    public function updateservice(Request $request,$id){
         $datas = DB::table('service')->join('category','service.category_id','=','category.id')
         ->join('subcategory','service.subcategory_id','=','subcategory.id')
      ->select('service.*','category.name as catname','subcategory.name as subname')->get();
      
      $data= service::findOrFail($id);
        //  dd($request->category1);
          $data->category_id = $request->category1;
           $data->subcategory_id = $request->subcategory1;
           $data->name = $request->name;
           $data->status = $request->status;
             $data->image = $request->image;
           $data->update();
          $category1 = category::all();
          $subcategory1 = subcategory::all();
          return view('service.service',compact('category1','datas','subcategory1'));
       }
       
    public function deleteservice($id){
       
           $data= service::findOrFail($id);
          $data->delete();
          return back()->with('success','service deleted successfully');
       }   
}



      
  /* public function viewservice(){
         $category1 = category::all();
         $datas = DB::table('service')->join('category','service.category_id','=','category.id')
         ->join('subcategory','service.subcategory_id','=','subcategory.id')
      ->select('service.*','category.name as catname','subcategory.name as subname')->get();
      dd($datas);
        $subcategory1 = subcategory::all();
         
         return view('service.service',compact('category1','subcategory1','datas'));
     }


}*/

