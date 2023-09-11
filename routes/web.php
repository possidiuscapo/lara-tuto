<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);

Route::get('/contact-us', [PagesController::class, 'contact']);
Route::get('/about-us', [PagesController::class, 'about']);
Route::get('/articles', [ArticlesController::class, 'index']);

// Route::get('/', function () {
//     $articles = [
//         [
//             "id" => 1,
//             "title" => "Titre article 1",
//             "description" => "Here is where you can register web routes for your application. These
//             routes are loaded by the RouteServiceProvider and all of them will
//             be assigned to the 'web' middleware group. Make something great!"
//         ],
//         [
//             "id" => 2,
//             "title" => "Titre article 2",
//             "description" => "Here is where you can register web routes for your application. These
//             routes are loaded by the RouteServiceProvider and all of them will
//             be assigned to the 'web' middleware group. Make something great!"
//         ],
//         [
//             "id" => 3,
//             "title" => "Titre article 3",
//             "description" => "Here is where you can register web routes for your application. These
//             routes are loaded by the RouteServiceProvider and all of them will
//             be assigned to the 'web' middleware group. Make something great!"
//         ],
//     ];
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
