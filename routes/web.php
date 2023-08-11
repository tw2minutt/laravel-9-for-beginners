<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Console\View\Components\Task;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
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
Route::get('/',function(){
   return view('home'); 
});

// Route::get('/',[PostController::class, 'showform']);

// //add post
// Route::post('/',[PostController::class, 'validateform']);

// //delete post
// Route::delete('/post/delete/{post}',function(Task $task){

// });

// Route::get('/about', function(){
//     return "Content about goes here";
// });