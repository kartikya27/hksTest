<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Models\treeEntry;

Route::get('/',[WebController::class,'index']);


Route::get('tree', function(){
    return treeEntry::tree();
});