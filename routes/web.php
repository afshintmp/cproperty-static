<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/builds')->group(function (){
    Route::get('/',function (){
        $build = [];
        return view('builds.list' , compact('build'));
    })->name('build.list');
    Route::get('/e-element',function (){
        $build = [];
        return view('StaticBuilds.eElement' , compact('build'));
    })->name('build.element.show');
    Route::get('/unity-south-langley',function (){
        $build = [];
        return view('StaticBuilds.UnitySouthLangley' , compact('build'));
    })->name('build.UnitySouthLangley.show');

});
