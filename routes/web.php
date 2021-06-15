<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/inputDiscount',function (){
    return view('inputDiscount');
});
Route::post('/inputDiscount',function (Request $request){
    $description =$request->description;
    $listPrice =$request->listPrice;
    $discountPercent =$request->discountPercent;
    $discountAmount =$listPrice*$discountPercent;
    $discountPrice = $listPrice-$discountAmount;
    return view('displayDiscount',compact(['description','listPrice','discountPercent','discountAmount','discountPrice']));
});
