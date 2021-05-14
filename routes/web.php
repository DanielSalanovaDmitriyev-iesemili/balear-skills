<?php

use App\Http\Controllers\SpaceController;
use App\Http\Controllers\SpaceTypeController;
use Illuminate\Support\Facades\Route;
use App\Models\Art;
use App\Models\Space;
use App\Models\SpaceType;
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


Route::get('/space/{space}', [SpaceController::class, 'show'])->name('show.space');
Route::get('/search', [SpaceController::class, 'search'])->name('search');
Route::post('/comment/{space}', [SpaceController::class, 'comment'])->name('comment');

Route::get('/type/index', [SpaceTypeController::class, 'index'])->name('index.type');
Route::get('/type/create', [SpaceTypeController::class, 'create'])->name('create.type');
Route::post('/type/store', [SpaceTypeController::class, 'store'])->name('store.type');
Route::get('/type/edit/{id}', [SpaceTypeController::class, 'edit'])->name('edit.type');
Route::get('/type/{id}', [SpaceTypeController::class, 'update'])->name('update.type');
Route::get('/type/{id}', [SpaceTypeController::class, 'delete'])->name('delete.type');