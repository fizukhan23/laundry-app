<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\ads;



class AdsManagmentController extends Controller
{
    //
 public function ads(Request $request){
    $ads = ads::all();
    return view('advertisment.ads',compact('ads'));
     }

     public function saveads(Request $request){
    //dd($request->input());
     $ads = new ads;
    //  $ads->image = $request->image;
      if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('Addadmin')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/ads/").$row->image;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
           
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/ads'), $image);
        $ads->image=$image;
        }
     $ads->status = $request->status;
     $res = $ads->save();
     if($res){
        return back()->with('success','successfull');
        
     }
    else{
         return back()->with('fail','error');
     }
     //return view('listuser');
      }

    //  public function viewdiscount(){
    //      $discount = discount::all();
    //      return view('Discount.discount',compact('discount'));
    //  }


  public function editads($id){
           $data= ads::findOrFail($id);
         return view('advertisment.editads',compact('data'));
      }
      
 public function updateads(Request $request,$id){
       $data= ads::findOrFail($id);
        // $data->image = $request->image;
        if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('Addadmin')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/ads/").$row->image;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
           
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/ads'), $image);
        $data->image=$image;
        }
        $data->status = $request-> status;
        $data->update();
        $ads = ads::all();
     return view('advertisment.ads',compact('ads'));
       }

 public function deleteads($id){
       $data= ads::findOrFail($id);
           $data->delete();
           return back()->with('success','deleted successfully');
       }

}
