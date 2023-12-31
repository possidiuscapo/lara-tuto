<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'index']);

Route::get('/home', [PagesController::class, 'index']);

Route::get('/contact-us', [PagesController::class, 'contact']);

Route::get('/about-us', [PagesController::class, 'about']);

Route::get('/articles', [ArticlesController::class, 'index']);

Route::get('/article/{id}', [ArticlesController::class, 'show']);

Route::get('/articles/create', [ArticlesController::class, 'create']);

Route::post('/articles/create', [ArticlesController::class, 'store']);

Route::get('/article/{article}/edit', [ArticlesController::class, 'edit']);

Route::put('/article/{article}/edit', [ArticlesController::class, 'update']);

Route::delete('/article/{article}/delete', [ArticlesController::class, 'delete']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/login', [SessionController::class, 'index'])->name('login');

Route::get('/profile', [UserController::class, 'index'])->name('profile');

// Route::get('/', function () {
//     $articles = []
//         
//     return view("admin.home", [
//         'articles'=> $articles,
//         'user'=> "Highfive 3",
//     ]);// une fonction qui permet de retourner une vue
// });

// // Route avec les paramètres

// Route::get('/article/{id}/{msg}', function (int $id, string $msg) {
//     return "<p>Details de l'article ". $id. " ". $msg;
// });

// // Route nommée
// Route::get('/particuliers/en/share/space/{id}', function (int $id) {
//     return "Route particuliers " . $id;
// })->name('detail');