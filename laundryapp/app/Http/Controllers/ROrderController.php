<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\order;

class ROrderController extends Controller
{
    //
     public function order(Request $request){
    $order =  order::all();
    return view('Report.order',compact('order'));
     }
 
}