<?php

use Illuminate\Http\Request;

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

Route::apiResource('/user','UserController');
Route::post('/login','UserController@login');
Route::apiResource('/event','EventController');
Route::apiResource('/ticketdescription','TicketdescriptionController');
Route::apiResource('/announcement','AnnouncementController');
Route::group(['prefix'=>'event'],function(){
	Route::apiResource('/{event}/subevent','SubeventController');
});
