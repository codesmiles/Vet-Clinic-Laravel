<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\AuthController;
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
Route::get("/", function (Request $request) {
    return response()->json([
        "route" => "api",
        "message" => "welcome to the api routes"
    ]);
});

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, "login"]);
    Route::post('/register', [AuthController::class, "register"]);
    Route::post('/forgot_password', [AuthController::class, "forgot_password"]);
    Route::post('/reset_password', [AuthController::class, "reset_password"]);
});


Route::prefix('employees')->middleware([])->group(function () {
    Route::get("/", [EmployeeController::class, "index"]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
