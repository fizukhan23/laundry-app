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

class DelivaryController extends Controller
{
    //
 public function orderlist(Request $request){
    $orderlist = orderlist::Where status=complete();
    return view('order.orderlist',compact('orderlist'));
     }
}