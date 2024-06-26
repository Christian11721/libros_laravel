<?php

use App\Models\Author;
use App\Models\Book;
use App\Http\Controllers\GenderController;
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
    return view('welcome');
});
Route::get('autores', function () {
    return response()->json(Author::all());
})->name('route_json');
Route::get('vista', function () {
    $registros = Book::count();
    return view('book', compact('registros'));
});
Route::get('regreso', function () {
    return redirect()->route('route_json');
});
Route::resource('genders', GenderController::class); 