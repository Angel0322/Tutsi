<?php 

use App\Http\Controllers\ProfileCOntroller; 
use Illuminate\Support\Facades\Route;

Route::middleware([])->group(function () {
    Route::get('admin/dashboard',function() {
        return view('layouts.admin.dashboard');
    }); 
});
