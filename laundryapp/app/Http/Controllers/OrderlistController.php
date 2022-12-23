<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\orderlist;
use App\Models\User;

class OrderlistController extends Controller
{
    //
 public function orderlist(Request $request){
    $orderlist =   DB::table('detailsorder')->join('create','detailsorder.user_id','=','create.id')
     ->select('detailsorder.*','create.name') ->orderBy('id', 'DESC')->get();
    return view('order.orderlist',compact('orderlist'));
     }

   public function updateorderlist(Request $request,$id){
        $orderlist =   DB::table('detailsorder')->join('create','detailsorder.user_id','=','create.id')
     ->select('detailsorder.*','create.name') ->orderBy('id', 'DESC')->get();
     
       $data= orderlist::findOrFail($id);
    //   $data->name = $request->name;
        $data->subcategoryname = $request->subcategoryname;
       $data->item_name = $request->item_name;
       $data->quantities = $request-> quantities;
       $data->user_id = $request-> user_id;
       $data->subtotal = $request-> subtotal;
        $data->charges = $request->charges;
        $data->total = $request->total;
        $data->delivary_type = $request->delivary_type;
        $data->pickup_date = $request->pickup_date;
       $data->address = $request->address;
        $data->coupen_code = $request->coupen_code;
        $data->discount = $request->discount;
       $data->status = $request->status;
       $data->orderd_by = $request->orderd_by;
       $data->picked_up = $request->picked_up;
      $data->Reached_to_plant = $request->Reached_to_plant;
       $data->Reached_to_workshop = $request->Reached_to_workshop;
         $data->Ready_to_delivary = $request->Ready_to_delivary;
          $data->delivered = $request->delivered;
       $data->update();
       $orderlist = DB::table('detailsorder')->join('create','detailsorder.user_id','=','create.id')
     ->select('detailsorder.*','create.name') ->orderBy('id', 'DESC')->get();
           return view('order.orderlist',compact('orderlist'));
       }

 public function deleteorderlist($id){
       
          $data= orderlist::findOrFail($id);
          $data->delete();
          return back()->with('success','list deleted successfully');
      }

    public function statusorderlist($id){
           $data= orderlist::findOrFail($id);
            $user = User::findOrFail($data->user_id);
     
          $data->name=$user->name;
           return view('order.statusorderlist',compact('data'));
      }
 




}
