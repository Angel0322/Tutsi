<?php 

use App\Http\Controllers\ProfileCOntroller; 
use Illuminate\Support\Facades\Route;

Route::middleware([])->group(function () {
    Route::get('client/dashboard',function() {
        return view('layouts.client.dashboard');
    }); 
});
