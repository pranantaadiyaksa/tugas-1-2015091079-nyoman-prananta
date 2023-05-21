<?php

use App\http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Profil",
        "name" => "myoman prananta adiyaksa adiyaksa mawardi",
        "nim" => "2015091079",
        "email" => "prnanta adiyaksa mawardia@undiksha.ac.id",
        "image" => "prananta.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);
