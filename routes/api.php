<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
Route::get("/", function (Request $request){
    return response()->json([
        "route" =>"api",
        "message" => "welcome to the api routes"
    ]);
});

Route::prefix('employees')->middleware([])->group(function () {
    Route::get("/", [EmployeeController::class, "index"]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
