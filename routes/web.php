<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');

Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

// Route::get('/send-email',function(){
//     $data = [
//         'name' => 'Testing Iki Asline',
//         'body' => 'Pie Kabare Lur'
//     ];
   
//     // Mail::to('bagasrnfull@gmail.com')->send(new SendEmail($data));
//     Mail::to('bagasrnfull@gmail.com')->send(new SendEmail($data));
   
//     dd("Email Berhasil dikirim.");
// });
