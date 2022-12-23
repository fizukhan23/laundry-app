<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\UserManageController;
use App\Http\Controllers\categoryManagementController;
use App\Http\Controllers\subCManagmentController;
use App\Http\Controllers\ServiceController ;
use App\Http\Controllers\OrderlistController;
use App\Http\Controllers\CorderController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\AdsManagmentController;
use App\Http\Controllers\ROrderController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\RatingManageController;
use App\Http\Controllers\directoderController;
use App\Http\Controllers\NotificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Admin login route
Route::get('/admin_login',[AdminController::class,'login']);

Route::post('/admin_login',[AdminController::class,'adminlogin']); 


//User management route
Route::get('/adduser',[UserManageController::class,'adduser']);
Route::post('/saveuser',[UserManageController::class,'saveuser']); 
Route::get('/viewuser',[UserManageController::class,'viewuser']);
Route::get('/edituser/{id}',[UserManageController::class,'edituser']);
Route::put('/updateuser/{id}',[UserManageController::class,'updateuser']);
Route::get('/deleteuser/{id}',[UserManageController::class,'deleteuser']);


//category management route
Route::get('/category',[categoryManagementController::class,'category']);
Route::post('/savecategory',[categoryManagementController::class,'savecategory']); 
Route::get('/viewcategory',[categoryManagementController::class,'viewcategory']);
Route::get('/editcategory/{id}',[categoryManagementController::class,'editcategory']);
Route::put('/updatecategory/{id}',[categoryManagementController::class,'updatecategory']);
Route::get('deletecategory/{id}',[categoryManagementController::class,'deletecategory']);


//subcategory managment route
Route::get('/subcategory',[subCManagmentController::class,'subcategory']);
Route::post('/savesubcategory',[subCManagmentController::class,'savesubcategory']); 
// Route::get('/viewsubcategory',[subCManagmentController::class,'viewsubcategory']);
Route::get('/editsubcategory/{id}',[subCManagmentController::class,'editsubcategory']);
Route::put('/updatesubcategory/{id}',[subCManagmentController::class,'updatesubcategory']);
Route::get('deletesubcategory/{id}',[subCManagmentController::class,'deletesubcategory']);



//service
Route::get('/service',[ServiceController::class,'service']);
Route::post('/saveservice',[ServiceController::class,'saveservice']);
//Route::get('/viewservice',[ServiceController::class,'viewservice']);
Route::get('/editservice/{id}',[ServiceController::class,'editservice']);
Route::put('/updateservice/{id}',[ServiceController::class,'updateservice']);
Route::get('deleteservice/{id}',[ServiceController::class,'deleteservice']);


//orderlist
Route::get('/orderlist',[OrderlistController::class,'orderlist']);
Route::post('/saveorderlist',[OrderlistController::class,'saveorderlist']);
// Route::get('/vieworderlist',[OrderlistController::class,'vieworderlist']);
//  Route::get('/editorderlist/{id}',[OrderlistController::class,'editorderlist']);
  Route::put('/updateorderlist/{id}',[OrderlistController::class,'updateorderlist']);
 Route::get('deleteorderlist/{id}',[OrderlistController::class,'deleteorderlist']);
 Route::get('/statusorderlist/{id}',[OrderlistController::class,'statusorderlist']);




//Corder
Route::get('/Corder',[CorderController::class,'Corder']);
Route::post('/saveCorder',[CorderController::class,'saveCorder']);
Route::get('/viewCorder',[CorderController::class,'viewCorder']);
Route::get('/editCorder/{id}',[CorderController::class,'editCorder']);
Route::put('/updateCorder/{id}',[CorderController::class,'updateCorder']);
Route::get('deleteCorder/{id}',[CorderController::class,'deleteCorder']);


//directorder
Route::get('/listorder',[directoderController::class,'listorder']);
Route::get('/directorder/{id}',[directoderController::class,'directorder']);
Route::post('/savedirectorder',[directoderController::class,'savedirectorder']);
// Route::get('/vieworderlist',[OrderlistController::class,'vieworderlist']);
//  Route::get('/editorderlist/{id}',[OrderlistController::class,'editorderlist']);
 Route::put('/updatedirectorder/{id}',[directoderController::class,'updatedirectorder']);
 Route::get('deletedirectorder/{id}',[directoderController::class,'deletedirectorder']);
 Route::get('/statusdirectorder/{id}',[directoderController::class,'statusdirectorder']);
 
  //Discount
 Route::get('/discount',[DiscountController::class,'discount']);
 Route::post('/savediscount',[DiscountController::class,'savediscount']);
 Route::get('/viewdiscount',[DiscountController::class,'viewdiscount']);
 Route::get('/editdiscount/{id}',[DiscountController::class,'editdiscount']);
 Route::put('/updatediscount/{id}',[DiscountController::class,'updatediscount']);
 Route::get('deletediscount/{id}',[DiscountController::class,'deletediscount']);



//ads
 Route::get('/ads',[AdsManagmentController::class,'ads']);
 Route::post('/saveads',[AdsManagmentController::class,'saveads']);
 Route::get('/editads/{id}',[AdsManagmentController::class,'editads']);
 Route::put('/updateads/{id}',[AdsManagmentController::class,'updateads']);
 Route::get('deleteads/{id}',[AdsManagmentController::class,'deleteads']);
 
//reviwes
Route::get('/Rating',[RatingManageController::class,'Rating']);
Route::post('/saveRating',[RatingManageController::class,'saveRating']);
Route::get('/editRating/{id}',[RatingManageController::class,'editRating']);
Route::put('/updateRating/{id}',[RatingManageController::class,'updateRating']);
Route::get('deleteRating/{id}',[RatingManageController::class,'deleteRating']);
 
// Route::get('/Reviews',[ReviwesManageController::class,'Reviews']);
// Route::post('/saveReviews',[ReviwesManageController::class,'saveReviews']);
// Route::get('/editReviews/{id}',[ReviwesManageController::class,'editReviews']);
// Route::put('/updateReviews/{id}',[ReviwesManageController::class,'updateReviews']);
// Route::get('deleteReviews/{id}',[ReviwesManageController::class,'deleteReviews']);

//Notification
Route::get('/Notification',[NotificationController::class,'Notification']);
Route::post('/saveNotification',[NotificationController::class,'saveNotification']);
Route::get('/editNotification/{id}',[NotificationController::class,'editNotification']);
Route::put('/updateNotification/{id}',[NotificationController::class,'updateNotification']);
Route::get('deleteNotification/{id}',[NotificationController::class,'deleteNotification']);



//reportorder
Route::get('/ROrder',[ROrderController::class,'order']);
Route::post('/saveROrder',[ROrderController::class,'saveorder']);




//collection
Route::get('/collection',[CollectionController::class,'collection']);
Route::post('/savecollection',[CollectionController::class,'savecollection']);





/*Route::get('/adduser', function () {
    return \App::call('\App\Http\UserManageController\Controller@adduser');
});

Route::post('/adduser', function () {
    return \App::call('\App\Http\UserManageController\Controller@saveuser');
});*/
// Route::get('/adduser',[DashboardController::class,'adduser']);
// Route::post('/adduser',[DashboardController::class,'save']);

// Route::get('/use', function () {
//     return view('adduser');
// });


