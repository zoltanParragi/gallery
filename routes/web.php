<?php

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
    //dd(listfiles(public_path('/images')));
    /* dd(\Illuminate\Support\Arr::where(scandir(public_path('/images')), function ($value, $key) {
        if(strlen($value) > 4) return $value;
    })); */
    /* dd(scandir(public_path('/images')), function($f) {
        if(strlen($f) > 4) return $f;
    }); */
    return view('welcome')->with('list', listfiles(public_path('/images')));
});
