<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AccountMid;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return redirect('/login');
});

Route::resource('account', AccountController::class)->middleware(['web', AccountMid::class]);
Route::resource('post', PostController::class)->middleware(['web', AccountMid::class]);
Route::get('/login', function(){
    return view('login.index');
})->middleware(['web']);
Route::get('/logout', function(){
    Session::flush();
    return view('login.index');
})->middleware(['web']);

Route::post('/authenticate', function(Request $request){
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $check = Account::where('username', $request->username)->where('password', $request->password)->get()->first();

    if($check == null){
        return redirect('/login')->with([
            'status' => 'Failed',
            'message' => 'Login Failed',
        ]);
    }
    else{
        Session::put('account', $check);
        return redirect()->route('post.index');
    }
})->middleware(['web']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
