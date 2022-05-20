<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[PageController::class,'index'])->name('/');

Route::get('/cateringservice',[PageController::class,'cateringservice'])->name('frontend.cateringservice');
Route::get('/decoration',[PageController::class,'decoration'])->name('frontend.decoration');
Route::get('/photography',[PageController::class,'photography'])->name('frontend.photography');


//Normal User Auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



//For Admin Panel
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


