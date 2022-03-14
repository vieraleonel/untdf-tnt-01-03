<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
    exec('php -v', $phpVersion);

    if (!Cache::get('cacheValue')) {
        Cache::put('cacheValue', time(), 30);
    }
    $cacheValue = Cache::get('cacheValue');

    $dbVersion = DB::statement('SELECT version()');

    Mail::send('email.demo', [], function ($message) {
        $message->from('john@johndoe.com', 'John Doe');
        $message->to('john@johndoe.com', 'John Doe');
        $message->subject('Subject');
    });

    return view('welcome', compact('phpVersion', 'cacheValue', 'dbVersion'));
});
