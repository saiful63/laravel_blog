<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\TagController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[FrontendController::class,'index'])->name('homePage');
Route::get('single-post/{single_post_id}',[FrontendController::class,'singlePost'])->name('singlePost');
Route::get('view-all-post',[FrontendController::class,'viewAllPost'])->name('viewAllPost');
Route::get('single_post_category/{single_post_id}',[FrontendController::class,'singlePostCategory'])->name('singlePostCategory');
Route::get('single_post_sub_category/{single_post_id}',[FrontendController::class,'singlePostSubCategory'])->name('singlePostSubCategory');
Route::get('single_post_tag/{single_post_id}',[FrontendController::class,'singlePostTag'])->name('singlePostTag');
Route::get('post_search',[FrontendController::class,'postSearch'])->name('postSearch');


Route::group(['prefix'=>'dashboard'],function(){
 Route::get('/',[BackendController::class,'index']);
 Route::resource('/category',CategoryController::class);
 Route::resource('/tag',TagController::class);
 Route::get('/sub-category/categoryBySubCategory',[SubCategoryController::class,'categoryBySubCategory'])->name('categoryBySubCategory');
 Route::resource('/sub-category',SubCategoryController::class);
 Route::get('/selected-tag/{jsonParameter}/{post}',[PostController::class,'tagDataForEdit'])->name('tagDataForEdit');
 Route::resource('/post',PostController::class);
});



require __DIR__.'/auth.php';
