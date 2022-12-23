<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\Notification;



class NotificationController extends Controller
{
    //
 public function Notification(Request $request){
    $Notification = Notification::all();
    return view('Notification.Notification',compact('Notification'));
     }

     public function saveNotification(Request $request){
   $data=[];
	        $data['message']= $request->body;
            
	        //$data['order_id']="order id";
	        
            $tokens = [];
           
           
            $tokens[] = $request->user;
           
	        $response = $this->sendFirebasePush($tokens,$data);
	       
	        $us = DB::table('create')->where('device_token',$request->user)->get();
	       
	        foreach($us as $u)
	        {
	             DB::table('Notification')->insert(['user_id' => $u->id,'message' => $request->body,'order_id' => $request->order,'created_at'=>date('Y-m-d')]);
	        }
	        //$users = DB::table('user')->get();
            return back()->with('success','Notification send successfully');
   
     }
      public function sendFirebasePush($tokens, $data)
	    {

	        $serverKey = 'AAAAVghBYm0:APA91bF4lfQsAEvYqk3YUwqUwWOj9LVRUAfEqHzoJUYWKVtBpm-88Ipl4T4x7lumbL2B28a7RRixQvZsU8ui1RiO1TztUi2GS9cr24XjW-pK53LqNLitSMtZI05fcDsmVNK14CnnOZHA';
	        
	        // prep the bundle
	        $msg = array
	        (
	            'message'   => $data['message'],
	            //'booking_id' => $data['booking_id'],
	        );

	        $notifyData = [
                 "body" => $data['message'],
                 "title"=> "Vastram Dry Cleaners"
            ];

	        $registrationIds = $tokens;
	        
	        if(count($tokens) > 1){
                $fields = array
                (
                    'registration_ids' => $registrationIds, //  for  multiple users
                    'notification'  => $notifyData,
                    'data'=> $msg,
                    'priority'=> 'high'
                );
            }
            else{
                
                $fields = array
                (
                    'to' => $registrationIds[0], //  for  only one users
                    'notification'  => $notifyData,
                    'data'=> $msg,
                    'priority'=> 'high'
                );
            }
	            
	        $headers[] = 'Content-Type: application/json';
	        $headers[] = 'Authorization: key='. $serverKey;

	        $ch = curl_init();
	        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
	        curl_setopt( $ch,CURLOPT_POST, true );
	        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
	        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
	        // curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
	        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
	        $result = curl_exec($ch );
	        if ($result === FALSE) 
	        {
	            die('FCM Send Error: ' . curl_error($ch));
	        }
	        curl_close( $ch );
	        return $result;
	    }
 public function editNotification($id){
          $data= Notification::findOrFail($id);
          return view('Notification.editNotification',compact('data'));
     }
public function updateNotification(Request $request,$id){
    // dd($request->input());
      $data= Notification::findOrFail($id);
      $data->user_id = $request->user_id;
      $data->order_id = $request->order_id; 
      $data->message = $request-> message;
       $data->update();
       $Notification = Notification::all();
          return view('Notification.Notification',compact('Notification'));
       }

public function deleteNotification($id){
      
          $data= Notification::findOrFail($id);
          $data->delete();
          return back()->with('success','Notification deleted successfully');
      }

}
