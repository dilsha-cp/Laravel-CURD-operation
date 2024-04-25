<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroller;

Route::get('/',[firstcontroller::class,'homepage'])->name('Home');
Route::get('newuser',[firstcontroller::class,'new'])->name('New');
Route::POST('save',[firstcontroller::class,'saveuser'])->name('save');
Route::get('update',[firstcontroller::class,'updateuser'])->name('Update');
Route::post('update', [firstcontroller::class, 'updateusere'])->name('update.post');
Route::get('delete',[firstcontroller::class,'deleteusere'])->name('Delete');
Route::post('delete', [firstcontroller::class, 'deleted'])->name('delete.post');
Route::get('search',[firstcontroller::class,'search'])->name('Search');
Route::post('search', [firstcontroller::class, 'display'])->name('Search.post');
