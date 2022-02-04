<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    //lazy loading
    return [
        'user' => \App\Models\User::with('request','bid','transaction')->get(),
        'request' => \App\Models\Request::with('user','bid')->get(),
        'transaction' => \App\Models\Transaction::with('user','bid')->get(),
        'bid' => \App\Models\Bid::with('request','user','transaction')->get(),
    ];
});
//bid request, transaction & user
//transaction load rel(user,bid)