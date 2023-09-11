<?php

use Illuminate\Support\Facades\Route;
use App\Models\User; // Adjust the namespace based on your actual file structure


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider, and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // Retrieve users from the User model
        $users = User::all();
        
        // Pass the $users variable to the 'dashboard' view
        return view('dashboard', compact('users'));
    })->name('dashboard');
});

