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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/greetings', [UserController::class,'index']);


// GET method
Route::get('/getuser', function() {
    return "Welcome user";
});

// POST method
Route::post('/postuser', function() {
    return "Post request from user";
});

// PUT method
Route::put('/putuser', function() {
    return "Put request from user";
});


// PATCH method
Route::patch('/patchuser', function() {
    return "Patch request from user";
});


// DELETE method
Route::delete('/deleteuser/{id}', function(){
    return 'Delete: delete request from users';
});


Route::match(['put', 'patch', 'post'], '/updateUser', function() {
    return "welcome to my World";
});

Route::any('/any', function () {
    return "Any";
});

Route::get('/users', function (Request $request) {
    return $request->name . '-'. $request->email;
});

