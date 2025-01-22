<?php

use App\Http\Controllers\CatoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Category.category');
// });
Route::get('/',[CatoryController::class,'index']);
Route::post('categories.store',[CatoryController::class,'store'])->name('categories.store');
Route::put('categories/{category}', [CatoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}',[CatoryController::class,'delete'])->name('categories.destroy');
