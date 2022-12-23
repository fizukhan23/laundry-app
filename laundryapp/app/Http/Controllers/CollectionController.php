<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;


class CollectionController extends Controller
{
    //
   public function adduser(Request $request){
     return view('Report.collection');
     }

}