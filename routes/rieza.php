<?php
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


 
Route::get('/greetings', [UserController::class,'index']);

 
Route::get('/hello', function() {
    return "hello world";
});

Route::post('/rie', function() {
    return "This is my world named riezaq";
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::match(['put', 'patch', 'post'], '/updateUserInfo', function() {
    return "welcome to my World";
});

Route::any('/any', function () {
    return "Any";
});

Route::get('/users', function (Request $request) {
    return $request->name . '-'. $request->email;
});
