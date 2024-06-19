<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

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

//first email - simple email
Route::get('/email-1', function () {

    $from = "Fenil Vadher Jigeshbhai";

    $list_emails =[
        "Fenil" => "fenil.vadher119437@marwadiuniversity.ac.in",
        "Vadher" => "fenilvadher0503@gmail.com"
    ];

    foreach ($list_emails as $name => $email){
        Mail::to($email)->send(new TestMail(compact("name","from")));

    }


    dd("Email sent successfully");
});

