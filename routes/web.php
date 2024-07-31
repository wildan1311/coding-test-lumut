<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('account', AccountController::class);
Route::resource('post', PostController::class);
Route::get('/login', function(){
    return view('login.index');
});

Route::post('/authenticate', function(Request $request){
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $check = Account::where('username', $request->username)->where('password', $request->password)->get();
    if($check == []){
        return redirect('/login');
    }
    else{
        Session::put('account', $check->first());
        return redirect('/home');
    }
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
