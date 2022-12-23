<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\Corder;

class CorderController extends Controller
{
    //
 public function Corder(Request $request){
     return view('order.Corder');
     }

     public function saveCorder(Request $request){
    //  dd($request->input());

     $detailsorder  = new Corder;
      $detailsorder ->user_id = $request-> user_id;
      $detailsorder ->categoryname = $request->categoryname;
     $detailsorder ->subcategoryname = $request->subcategoryname;
     $detailsorder ->item_name = $request->item_name;
   
     $detailsorder ->quantities = $request-> quantities;
    
     $detailsorder ->subtotal = $request-> subtotal;
     $detailsorder ->charges = $request->charges;
     $detailsorder ->total = $request->total;
     $detailsorder ->delivary_type = $request->delivary_type;
     $detailsorder ->pickup_date = $request->pickup_date;
     
     $detailsorder ->coupen_code = $request->coupen_code;
     $detailsorder ->discount = $request->discount;
     $detailsorder ->picked_up = $request->picked_up;
     $detailsorder ->Reached_to_plant = $request->Reached_to_plant;
     $detailsorder ->Reached_to_workshop = $request->Reached_to_workshop;
     $detailsorder ->Ready_to_delivary = $request->Ready_to_delivary;
     $detailsorder ->delivary = $request->delivary;
    //  $detailsorder ->status = $request->status;
    
     
      $res =  $detailsorder->save();
    if($res){
        return back()->with('success','order created successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    // return view('listCorder');
     }
 public function viewCorder(){
      
      $detailsorder = DB::table('detailsorder')->orderBy('id', 'DESC')->get();
        return view('order.listCorder',compact('detailsorder'));
     }

 public function editCorder($id){
         $data= Corder::findOrFail($id);
         
        return view('order.editCorder',compact('data'));
     }
public function updateCorder(Request $request,$id){
         $data= Corder ::findOrFail($id);
         $data->user_id = $request->user_id;
         $data->categoryname = $request->categoryname; 
         $data->subcategoryname = $request->subcategoryname;
         $data->item_name = $request->item_name;
        //  $data->number = $request->number;
         $data->quantities = $request->quantities;
         $data->subtotal = $request->subtotal;
         $data->charges = $request->charges;
         $data->total = $request->total;
         $data->delivary_type = $request->delivary_type;   
         $data->pickup_date = $request->pickup_date;   
        //  $data->address = $request->address;  
         $data->coupen_code = $request->coupen_code;
         $data->discount = $request->discount;
         $data->picked_up = $request->picked_up;
         $data->Reached_to_plant = $request->Reached_to_plant;
         $data->Reached_to_workshop = $request->Reached_to_workshop;
         $data->Ready_to_delivary = $request->Ready_to_delivary;
         $data->delivered = $request->delivered;
        //  $data->status = $request->status;
        
         $data->update();
         $detailsorder = Corder::all();
        return view('order.listCorder',compact('detailsorder'));
     }

     public function deleteCorder(Request $request , $id){
         $data= Corder::findOrFail($id);
         $data->delete();
         return back()->with('success','order deleted successfully');
     }

}
