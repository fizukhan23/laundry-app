<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("sign-up",[UserController::class,'add']);

Route::post("Account",[UserController::class,'add']);

Route::post("login",[UserController::class,'new']);

Route::post("otp",[UserController::class,'new1']);

Route::post("delete_account",[UserController::class,'delete_account']);
Route::post("directorder",[UserController::class,'new3']);

Route::post("direct",[UserController::class,'direct']);

Route::post("user",[UserController::class,'user']);

Route::post("detailsorder",[UserController::class,'new4']);

Route::post("Customerdetails",[UserController::class,'new5']);

Route::post("Rating",[UserController::class,'new6']);

Route::get("rating",[UserController::class,'rating']); 

Route::post("loginG",[UserController::class,'new7']);      

Route::post("loginF",[UserController::class,'new8']); 

Route::post("loginA",[UserController::class,'apple']); 

Route::get("ads",[UserController::class,'allads']);  

Route::get("service/{id}",[UserController::class,'search_service']); 

Route::post("service",[UserController::class,'service']); 

Route::post("services",[UserController::class,'services']); 

Route::post("discount",[UserController::class,'new9']);

Route::get("discount",[UserController::class,'discount']); 

Route::get("category",[UserController::class,'category']); 

Route::get("subcategory",[UserController::class,'subcategory']); 

Route::get("Reviews",[UserController::class,'Reviews']); 

Route::post("myorder",[UserController::class,'myorder']); 

// Route::get("display_order/{id}",[UserController::class,'display_order']);

Route::post("update_address",[UserController::class,'update_address']); 

Route::post("notification",[UserController::class,'notification']); 

Route::post("update_number",[UserController::class,'update_number']);

Route::post("orderid",[UserController::class,'orderid']); 
Route::post("update_token",[UserController::class,'update_token']);

Route::post("updateNotification",[UserController::class,'updateNotification']);