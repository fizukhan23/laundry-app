<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\discount;



class DiscountController extends Controller
{
    //
 public function discount(Request $request){
    $discount = discount::all();
    return view('Discount.discount',compact('discount'));
     }

     public function savediscount(Request $request){
    //dd($request->input());
     $discount = new discount;
     $discount->title = $request->title;
     $discount->code = $request->code;
     $discount->time = $request->time;
     $discount->discount = $request->discount;
     $discount->discount_type = $request->discount_type;
     $discount->limit = $request->limit;
    //  $discount->image = $request->image;
     if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('discount')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/icons/").$row->image;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
           
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/icons'), $image);
        $discount->image=$image;
        }
     $res = $discount->save();
     if($res){
        return back()->with('success','discount added successfully');
        
     }
    else{
         return back()->with('fail','error');
     }
     //return view('listuser');
      }

 public function editdiscount($id){
          $data= discount::findOrFail($id);
         
         return view('Discount.editdiscount',compact('data'));
     }
public function updatediscount(Request $request,$id){
      $data= discount::findOrFail($id);
      $data->title = $request->title;
      $data->code = $request->code;
      $data->time = $request-> time;
      $data->discount = $request-> discount;
      $data->discount_type = $request-> discount_type;
      $data->limit = $request-> limit;
    //   $data->image = $request-> image;
      if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('discount')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/icons/").$row->image;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
           
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/icons'), $image);
        $data->image=$image;
        }
       $data->update();
       $discount = discount::all();
          return view('Discount.discount',compact('discount'));
       }

public function deletediscount($id){
      
          $data= discount::findOrFail($id);
          $data->delete();
          return back()->with('success','discount deleted successfully');
      }

}
