<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\FrontendController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\UserRoleController;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/',[FrontendController::class,'index'])->name('homePage');
Route::get('single-post/{single_post_id}',[FrontendController::class,'singlePost'])->name('singlePost');
Route::get('view-all-post',[FrontendController::class,'viewAllPost'])->name('viewAllPost');
Route::get('single_post_category/{single_post_id}',[FrontendController::class,'singlePostCategory'])->name('singlePostCategory');
Route::get('single_post_sub_category/{single_post_id}',[FrontendController::class,'singlePostSubCategory'])->name('singlePostSubCategory');
Route::get('single_post_tag/{single_post_id}',[FrontendController::class,'singlePostTag'])->name('singlePostTag');
Route::get('post_search',[FrontendController::class,'postSearch'])->name('postSearch');
Route::get('contact_us',[FrontendController::class,'contactUs'])->name('contactUs');
Route::post('add_contact_msg',[FrontendController::class,'addContactMsg'])->name('addContactMsg');
Route::post('post_comment',[FrontendController::class,'postComment'])->name('postComment');
Route::post('replay_comment',[FrontendController::class,'replayComment'])->name('replayComment');


Route::group(['prefix'=>'dashboard'],function(){
 Route::get('/',[BackendController::class,'index']);
 Route::resource('/post',PostController::class);
 Route::get('/sub-category/categoryBySubCategory',[SubCategoryController::class,'categoryBySubCategory'])->name('categoryBySubCategory');
 Route::get('user_profile',[ProfileController::class,'index'])->name('profile.index');
 Route::post('sent_division_data',[ProfileController::class,'sentDivisionData'])->name('sentDivisionData');
 Route::post('sent_district_data',[ProfileController::class,'sentDistrictData'])->name('sentDistrictData');
 Route::put('update_profile',[ProfileController::class,'updateProfile'])->name('updateProfile');

 Route::group(['middleware'=>'multiauth'],function(){
    Route::resource('/category',CategoryController::class);
    Route::resource('/tag',TagController::class);

    Route::resource('/sub-category',SubCategoryController::class);
    Route::get('/selected-tag/{jsonParameter}/{post}',[PostController::class,'tagDataForEdit'])->name('tagDataForEdit');
    Route::post('roleAssign',[UserRoleController::class,'roleAssign'])->name('roleAssign');
    Route::resource('user_role',UserRoleController::class);

 });

});



require __DIR__.'/auth.php';
