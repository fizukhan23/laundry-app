<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function add(Request $request){
    //     $create = new User;
    //     $create->name = $request->full_name;
    //     $create->email = $request->email;
    //     $create->city = $request->city;
    //     $create->number = $request->mobail_number;
    //     $create->google_id = $request->google;
    //     $create->facebook_id = $request->facebook;
    //     $create->save();
    //     $result = User::all();
    //     return $result;
    //  }
    
//account api
public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'number' => 'required',
            // 'password' => 'required',
          
            // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();
           
       
                $affected = DB::table('create')
                ->insertGetId([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'city' => $input['city'],
                    'number' => $input['number'],
                   
                ]);
         
   $user_details = DB::table('create')
            ->where('id', '=', $affected)
            ->first();  
                
                if($affected){
                    $data=array();
                    // $data['id']=$user_datails;
                    $output['response']=true;
                    $output['message']='Register Successfull';
                    $output['data']=$user_details;
                }else{
                    $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
    }

public function delete_account(Request $request)
{
    $u = DB::table('create')->where('id',$request->id)->delete();
    if($u)
    {
         $output['response']=true;
                    $output['message']='Account deleted Successfull';
                   
    }
    else
    {
         $output['response']=true;
                    $output['message']='Invalid';
    }
    header('Content-Type: application/json'); 
        print_r(json_encode($output));  
}
//login-api

      public function new(Request $request){
        $validator = Validator::make($request->all(), [
            'number' => 'required',
            // 'password'=>'required',
              ]);
        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
              
                
                $affected = DB::table('create')->where('number','=',$request->number)->first();
               
                if($affected){
                    if ($affected->number) {
                    $output['response']=true;
                    $output['message']='login post Successfull';
                    $output['data']=$affected;
                    }else{
                     $output['response']=false;
                    $output['message']='wrong pasword';
                    }
                }else{
                    $output['response']=false;
                    $output['message']='User Not Found';
                  
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output)); 
        
    }

//loginwithgoogle
     public function new7(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'googleid' => 'required',
           // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            
           $r=$request->googleid;
        //   print_r($r);
           $n=$request->name;
           $e=$request->email;
           $affected = DB::table('create')->where('googleid','=',$r)->first();
               if($affected){
                    // $data=array($affected);
                    //   print_r($affected);
                    $output['response']=true;
                    $output['message']='login with google Successfull';
                    $output['data']=$affected;
                
                }else{
                    $affectedid = DB::table('create')
                ->insertGetId([
                    'name' => $n,
                    'email' => $e,
                   'googleid' => $r,
                 
                 ]);
                $affecteduser = DB::table('create')->where('id','=',$affectedid)->first(); 
                if( $affecteduser){
                    // $data=array($affecteduser);
                    // print_r($affectedid);
                    $output['response']=true;
                    $output['message']='login with google Successfull';
                    $output['data']=$affecteduser;
                
                }else{
                    $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
                }
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
    }
    
//loginwithfacebook      

      public function new8(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'facebookid' => 'required',
           // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            
           $r=$request->facebookid;
        //   print_r($r);
           $n=$request->name;
           
           $affected = DB::table('create')->where('facebookid','=',$r)->first();
               if($affected){
                    // $data=array($affected);
                    //   print_r($affected);
                    $output['response']=true;
                    $output['message']='login with facebook Successfull';
                    $output['data']=$affected;
                
                }else{
                    $affectedid = DB::table('create')
                ->insertGetId([
                    'name' => $n,
                   'facebookid' => $r,
                  ]);
                 $affecteduser = DB::table('create')->where('id','=',$affectedid)->first();  
                if( $affecteduser){
                    // $data=array($affecteduser);
                    // print_r($affectedid);
                    $output['response']=true;
                    $output['message']='login with facebook Successfull';
                    $output['data']=$affecteduser;
                
                }else{
                    $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
                }
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
    }
    

//login with apple


     public function apple(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'appleid' => 'required',
           // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            
           $r=$request->appleid;
        //   print_r($r);
           $n=$request->name;
           $e=$request->email;
           $affected = DB::table('create')->where('appleid','=',$r)->first();
               if($affected){
                    // $data=array($affected);
                    //   print_r($affected);
                    $output['response']=true;
                    $output['message']='login with apple Successfull';
                    $output['data']=$affected;
                
                }else{
                    $affectedid = DB::table('create')
                ->insertGetId([
                    'name' => $n,
                    'email' => $e,
                   'appleid' => $r,
                 
                 ]);
                $affecteduser = DB::table('create')->where('id','=',$affectedid)->first(); 
                if( $affecteduser){
                    // $data=array($affecteduser);
                    // print_r($affectedid);
                    $output['response']=true;
                    $output['message']='login with google Successfull';
                    $output['data']=$affecteduser;
                
                }else{
                    $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
                }
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
    }
    
public function new1(Request $request){

    $response = array();
    $mobile_number = Auth::otp()->id;

    $otp = otp::where('id', $mobile_number)->first();

    if ( isset($otp['mobile_number']) && $otp['mobile_number'] =="" ) {
        $response['error'] = 1;
        $response['message'] = 'Invalid mobile number';
        $response['loggedIn'] = 1;
    } else {

        $otp = rand(100000, 999999);
        $MSG91 = new MSG91();

        $msg91Response = $MSG91->sendSMS($otp,$otp['mobile_number']);

        if($msg91Response['error']){
            $response['error'] = 1;
            $response['message'] = $msg91Response['message'];
            $response['loggedIn'] = 1;
        }else{

            Session::put('OTP', $otp);

            $response['error'] = 0;
            $response['message'] = 'Your OTP is created.';
            $response['OTP'] = $otp;
            $response['loggedIn'] = 1;
        }
    }
    echo json_encode($response);
}


//direct-order api

  public function new3(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'endtime' => 'required',
            'quantity' => 'required',
            'starttime' => 'required',
             'date' => 'required',
            // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();
           
           
                $affected = DB::table('directorder')
                ->insertGetId([
                    'user_id' => $input['user_id'],
                    'endtime' => $input['endtime'],
                    'quantity' => $input['quantity'],
                    'starttime' => $input['starttime'],
                    'date' => $input['date'],
                   
                ]);
         

            $user_details = DB::table('directorder')
            ->where('id', '=', $affected)
            ->first();  
                
                if($affected){
                    $data=array();
                    // $data['id']=$user_datails;
                    $output['response']=true;
                    $output['message']='order post  Successfull';
                    $output['data']=$user_details;
                }else{
                    $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
  }
  
  
  //my order 
   public function myorder(Request $request){
      $validator = Validator::make($request->all(), [
         'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();  
            $r=$request->user_id;
            
        //   print_r($r);
        $r= DB::table('detailsorder')->where('user_id', '=', $r)->latest('id')->get();
        //   print_r($r);
       if($r->isEmpty())
         {
             $output['response']=false;
             $output['message']='Blocked By SubAdmin';
         }else{
         $output['response']=true;
         $output['data']=$r;
                } 
    }
     header('Content-Type: application/json'); 
         print_r(json_encode($output));  
}


  //direct api
  public function user(Request $request){
      $validator = Validator::make($request->all(), [
            'id' => 'required',
           
            // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();  
               $r=$request->id;
           print_r($r);
        $r= DB::table('create')->where('id', '=', $r)->get();
        //   print_r($r);
       if($r->isEmpty())
         {
             $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
         }else{
                   
                    
        
        $output['response']=true;
         $output['data']=$r;
                } 
         
    }
     header('Content-Type: application/json'); 
         print_r(json_encode($output));  
}
    
  
  
  

//details order
public function new4(Request $request){
        $validator = Validator::make($request->all(), [
            'categoryname' => 'required',
            'subcategoryname' => 'required',
            'item_name' => 'required',
            'number' => 'required',
            'quantities' => 'required',
            'user_id' => 'required',
            'subtotal' => 'required',
            'charges' => 'required',
            'total' => 'required',
            'delivary_type' => 'required',
            'pickup_date' => 'required',
            'address' => 'required',
            'coupen_code' => 'required',
             'discount' => 'required',
             'orderd_by' => 'required',
            // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            //  $item_name = $request->item_name;
            //  $a = json_encode($item_name);
            // $quantities= $request->quantities;
            // $b = json_encode($quantities);
           $input = $request->all();
           
                $affected = DB::table('detailsorder')
                ->insertGetId([
                      'categoryname' => $input['categoryname'],
                     'subcategoryname' => $input['subcategoryname'],
                    'item_name' => $input['item_name'] ,
                    'number' => $input['number'],
                    'quantities' => $input['quantities'],
                    'user_id' => $input['user_id'],
                    'subtotal' => $input['subtotal'],
                    'charges' => $input['charges'],
                     'total' => $input['total'],
                     'delivary_type' => $input['delivary_type'],
                    'pickup_date' => $input['pickup_date'],
                    'address' => $input['address'],
                    'coupen_code' => $input['coupen_code'],
                      'discount' => $input['discount'],
                        'orderd_by' => $input['orderd_by'], 
                    
                ]);
         
            // $user_details = DB::table('detailsorder')
            // ->where('id', '=', $affected)
            // ->first();  
                
                if($affected){
                    $data=array($affected);
                    // $data['id']=$user_datails;
                    $output['response']=true;
                    $output['message']='Order Successfully';
                    $output['data']=$data;
                }else{
                    $output['response']=false;
                    $output['message']='Order cancle';
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));
        //  $details = new Detailsorder;
        //  $details->item_ids = $a;
        //  $details->save();
         
         //postman
         //id = service id by comma 43,44,45
    }
    
//customerdetails
public function new5(Request $request){
        $validator = Validator::make($request->all(), [
            'C_name' => 'required',
            'number' => 'required',
           'address' => 'required',
           'date' => 'required',
          
            // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();
           
           
                $affected = DB::table('Customerdetails')
                ->insertGetId([
                    'C_name' => $input['C_name'],
                    'number' => $input['number'],
                    'address' => $input['address'],
                    'date' => $input['date'],
                     ]);
         $user_details = DB::table('Customerdetails')
            ->where('id', '=', $affected)
            ->first();  
                
                if($affected){
                    $data=array();
                    // $data['id']=$user_datails;
                    $output['response']=true;
                    $output['message']='customer details post  Successfull';
                    $output['data']=$user_details;
                }else{
                    $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
    }
    
    
    // rating
public function new6(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'rating' => 'required',
           'Description' => 'required',
           
            // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();
           
           
                $affected = DB::table('Rating')
                ->insertGetId([
                    'username' => $input['username'],
                    'rating' => $input['rating'],
                 'Description' => $input['Description'],
                     ]);
         

            $user_details = DB::table('Rating')
            ->where('id', '=', $affected)
            ->first();  
                
                if($affected){
                    $data=array();
                    // $data['id']=$user_datails;
                    $output['response']=true;
                    $output['message']='rating  post Successfull';
                    $output['data']=$user_details;
                }else{
                    $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
    }
    //rating get
  public function rating(Request $request){
           $rows = DB::table('Rating')->latest('id')->get();
             $results = [];
            foreach($rows as $rav){
               
                 
                  array_push($results, $rav);
               } 
                if($results){
                    $data=array();
                    $output['response']=true;
                    $output['message']='Rating Data Get Successfully';
                    $output['data']=$results;
                }
                else{
                    $output['response']=false;
                    $output['message']='Data Not Found';
                }
       
            
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }
     
    

 // ads  get api
 
  public function allads(Request $request){
           
            $rows = DB::table('ads')->latest('id')->get();
             $results = [];
            foreach($rows as $rav){
               
                //$rav->image ='https://laundryapp.annasuchi.com/public/images/ads/' . $rav->image;
                 $rav->image = env('APP_URL') . 'images/ads/' . $rav->image;
                  array_push($results, $rav);
               } 
             
                if($results){
                    $data=array();
                    $output['response']=true;
                    $output['message']='advertisment Get Successfully';
                    $output['data']=$results;
                }
                else{
                    $output['response']=false;
                    $output['message']='Invalid categoryid';
                }
       
            
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }
 
  //search service
    public function search_service(Request $request,$id){
        $rows= DB::table('service')->where("name","like","%".$id."%")->get();
        
             $results = [];
            foreach($rows as $rav){
               
               
                //   $rav->image = 'https://laundryapp.annasuchi.com/public/images/icons/' . $rav->image;
                   $rav->image = env('APP_URL') . 'images/icons/' . $rav->image;
                  array_push($results, $rav);
               } 
             
          
                if($results){
                    $data=array();
                    $output['response']=true;
                    $output['message']='Item Searched Successfully';
                    $output['data']=$results;
                }
                else{
                    $output['response']=false;
                    $output['message']='data not found';
                }
       
            
        header('Content-Type: application/json');
        print_r(json_encode($output));  
       
    }
   
     
 
    
 
 //service
  public function service(Request $request){
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'subcategory_id' => 'required',
             'name' => 'required',
             'price' => 'required',
             'status' => 'required',
            
           
            // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }
 
           
           
          $affected = DB::table('service')->insertGetId([
                    'category_id' => $request->category_id,
                    'subcategory_id' =>$request->subcategory_id,
                    'name' => $request->name,
                    'price' => $request->price,
                    'status' => $request->status,
                     ]);
         

           $user_details =DB::table('service')
             ->leftJoin('category', 'service.category_id', '=','category.id' )
             ->leftJoin('subcategory', 'service.subcategory_id', '=','subcategory.id' )
             ->where('service.id', '=', $affected)
             ->select('service.id as id')
            ->first();  
                
                if($user_details){
                 
                    // $data['id']=$user_datails;
                    $output['response']=true;
                    $output['message']='service  post Successfull';
                    $output['data']=$user_details;
                }else{
                    $output['response']=false;
                    $output['message']='Blocked By SubAdmin';
                }    
        
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
    }
  
//get service
 public function services(Request $request){
           $rows = DB::table('service')->where('category_id',$request->id)->orderBy('id', 'ASC')->get();
             $results = [];
            foreach($rows as $rav){
        
          $rav->image = env('APP_URL') . 'images/icons/' . $rav->image;
                 
                  array_push($results, $rav);
               } 
                if($results){
                    $data=array();
                    $output['response']=true;
                    $output['message']='service Data Get Successfully';
                    $output['data']=$results;
                }
                else{
                    $output['response']=false;
                    $output['message']='Data Not Found';
                }
       
            
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }



 //discount

public function new9(Request $request){
        $validator = Validator::make($request->all(), [
            'code' => 'required',
        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
         
           $affected = DB::table('discount')->where('code','=',$request->code)->first();
               if($affected){
                    $data=array($affected);
                    // $data['id']=$user_datails;
                    $output['response']=true;
                    $output['message']='discount applied Successfully';
                    $output['data']=$affected;
                }else{
                    $output['response']=false;
                    $output['message']='Invalid coupen code';
                }    
        }
        header('Content-Type: application/json'); 
        print_r(json_encode($output));  
    }
   //discount get
    public function discount(Request $request){
           
            $rows = DB::table('discount')->latest('id')->get();
             $results = [];
            foreach($rows as $rav){
           //   $rav->banner ='https://laundryapp.annasuchi.com/public/images/icons/' . $rav->banner;
         $rav->image = env('APP_URL') . 'images/icons/' . $rav->image;
                  array_push($results, $rav);
               } 
                if($results){
                    $data=array();
                    $output['response']=true;
                    $output['message']='advertisment Get Successfully';
                    $output['data']=$results;
                }
                else{
                    $output['response']=false;
                    $output['message']='Invalid categoryid';
                }
          
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }
 
  //category get  
 public function category(Request $request){
           $rows = DB::table('category')->get();
             $results = [];
                        foreach($rows as $rav){
           //   $rav->banner ='https://laundryapp.annasuchi.com/public/images/icons/' . $rav->banner;
         $rav->icon = env('APP_URL') . 'images/icons/' . $rav->icon;
                  array_push($results, $rav);
               } 
                if($results){
                    $data=array();
                    $output['response']=true;
                    $output['message']='category Data Get Successfully';
                    $output['data']=$results;
                }
                else{
                    $output['response']=false;
                    $output['message']='Data Not Found';
                }
       
            
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }
 //subcategory
  public function subcategory(Request $request){
           $rows = DB::table('subcategory')->get();
             $results = [];
            foreach($rows as $rav){
               
                 
                  array_push($results, $rav);
               } 
                if($results){
                    $data=array();
                    $output['response']=true;
                    $output['message']='category Data Get Successfully';
                    $output['data']=$results;
                }
                else{
                    $output['response']=false;
                    $output['message']='Data Not Found';
                }
       
            
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }
 
 
 //Reviews
public function Reviews(Request $request){
           $rows = DB::table('Reviews')->latest('id')->get();
             $results = [];
            foreach($rows as $rav){
               
                 
                  array_push($results, $rav);
               } 
                if($results){
                    $data=array();
                    $output['response']=true;
                    $output['message']='Reviews Data Get Successfully';
                    $output['data']=$results;
                }
                else{
                    $output['response']=false;
                    $output['message']='Data Not Found';
                }
       
            
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }

// public function directorder(Request $request){
//           $rows = DB::table('directorder')->latest('id')->get();
//              $results = [];
//             foreach($rows as $rav){
               
                 
//                   array_push($results, $rav);
//               } 
//                 if($results){
//                     $data=array();
//                     $output['response']=true;
//                     $output['message']='directorder Data Get Successfully';
//                     $output['data']=$results;
//                 }
//                 else{
//                     $output['response']=false;
//                     $output['message']='Data Not Found';
//                 }
       
            
//         header('Content-Type: application/json');
//         print_r(json_encode($output));  
//     }


// public function display_order(Request $request,$id){
//     $newsIds = DB::table('detailsorder')
//     ->where('user_id' , $id)
//     ->get();
//   $results = [];
//   foreach($newsIds as $n){
//       $service = DB::table('service')->whereIn('id',json_decode($n->id))->get();
//       array_push($results,$n);
//   }
//     if($results){
//                     $data=array();
//                     $output['response']=true;
                   
//                     $output['data']=$results;
//                 }
//                 else{
//                     $output['response']=false;
//                     $output['message']='Data Not Found';
//                 }
       
            
//         header('Content-Type: application/json');
//         print_r(json_encode($output));  
   
// }

public function notification(Request $request){
      $validator = Validator::make($request->all(), [
            'user_id' => 'required',
           'insert_datetime' => date('Y-m-d H:i:s')
            // 'type' => 'required',

        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();  
               $r=$request->user_id;
        
            
             
        //   print_r($r);
        $r= DB::table('Notification')->where('user_id', '=', $r)->latest('created_at')->get();
        
        //   print_r($r);
       if($r->isEmpty())
         {
             $output['response']=false;
             $output['message']='Blocked By SubAdmin';
         }else{
         $output['response']=true;
         $output['data']=$r;
                } 
         
    }
    //  header('Content-Type: application/json'); 
         print_r(json_encode($output));  
}
//update address
 public function update_address(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
             'city' => 'required',
            // 'email' => 'required|email|unique:users,email',
            // 'mobile' => 'required',
            // 'location' => 'required',
        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();
           
           $user = DB::table('create')
           ->where('id', '=', $input['user_id'])
           ->first();
            if($user != null){
              if(!empty($input['city']))
                    {
                        $affected = DB::table('create')
                          ->where('id', '=', $input['user_id'])
                          ->update(['city' => $input['city'],
                                  
                        ]);  
                    }
                    
                  $userss = DB::table('create')
                   ->where('id', '=', $input['user_id'])
                   ->first();      
                        $data=array();
                        $output['response']=true;  
                        $output['data']=$userss;
            }else{
                $output['response']=false;
                $output['message']='Invalid User';
            }
            
        }
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }


 public function update_number(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
             'number' => 'required',
            // 'email' => 'required|email|unique:users,email',
            // 'mobile' => 'required',
            // 'location' => 'required',
        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();
           
           $user = DB::table('create')
           ->where('id', '=', $input['user_id'])
           ->first();
            if($user != null){
              if(!empty($input['number']))
                    {
                        $affected = DB::table('create')
                          ->where('id', '=', $input['user_id'])
                          ->update(['number' => $input['number'],
                                  
                        ]);  
                    }
                    
                  $userss = DB::table('create')
                   ->where('id', '=', $input['user_id'])
                   ->first();      
                        $data=array();
                        $output['response']=true;  
                        $output['data']=$userss;
            }else{
                $output['response']=false;
                $output['message']='Invalid User';
            }
            
        }
        header('Content-Type: application/json');
        print_r(json_encode($output));  
    }
    //Order id
 public function orderid(Request $request){
      $validator = Validator::make($request->all(), [
         'id' => 'required',
        ]);

        if ($validator->fails()) {
            $output['response']=false;
            $output['message']=$validator->errors();
        }else{
            $input = $request->all();  
            $r=$request->id;
        //   print_r($r);
        $p= DB::table('detailsorder')->where('id', '=', $r)->first();
        //   print_r($p);
       if(empty($p))
         {
             $output['response']=false;
             $output['message']='Blocked By SubAdmin';
         }else{
         $output['response']=true;
         $output['data']=$p;
                } 
    }
    //  header('Content-Type: application/json'); 
         print_r(json_encode($output));  
}
public function update_token(Request $request)
{
    DB::table('create')->where('id',$request->id)->update(['device_token' => $request->device_token]);
    $output['response']=true;
            $output['message']='Token updated successfully';
            header('Content-Type: application/json'); 
        print_r(json_encode($output));
}
public function getNotification(Request $request)
{
    $r = DB::table('notifications')->where('userid',$request->id)->get();
    $output['response']=true;
            $output['data']=$r;
            header('Content-Type: application/json'); 
        print_r(json_encode($output));
}
public function updateNotification(Request $request)
{
    $r = DB::table('notifications')->where('id',$request->id)->update(['seen' => 1]);
    $output['response']=true;
            $output['data']=$r;
            header('Content-Type: application/json'); 
        print_r(json_encode($output));
}

}