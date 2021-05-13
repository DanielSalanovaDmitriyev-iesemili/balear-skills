<?php

use App\Http\Controllers\SpaceController;
use Illuminate\Support\Facades\Route;
use App\Models\Art;
use App\Models\Space;
use App\Models\User;

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
require __DIR__.'/auth.php';


//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
//    Route::get('/', function () {
//        return view('welcome');
//    });
    
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->middleware(['auth'])->name('dashboard');
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    
   
//});
//Route::get('/', function () {
//   return view('table');
//});

Route::get('/', [SpaceController::class, 'index'])->name('index.space');


Route::get('/space/{id}', [SpaceController::class, 'show'])->name('show.space');
Route::post('/comment', [SpaceController::class, 'comment'])->name('comment');