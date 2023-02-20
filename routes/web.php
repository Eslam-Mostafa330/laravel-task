<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get("login", [UserController::class, "login"]);
Route::post("login", [UserController::class, "loginRequest"]);

Route::get("/admin/category", [CategoryController::class, "index"]);

Route::get("/admin/category/create", [CategoryController::class, "create"]);
Route::post("/admin/category/store", [CategoryController::class, "store"]);
Route::get("/admin/category/delete/{id}", [CategoryController::class, "destroy"]);
Route::get("admin/category/edit/{id}", [CategoryController::class, "edit"]);
Route::post("admin/category/update", [CategoryController::class, "update"]);

Route::get("admin/article/create", [ArticleController::class, "create"]);
Route::post("admin/article/store", [ArticleController::class, "store"]);
Route::get("admin/article", [ArticleController::class, "index"]);