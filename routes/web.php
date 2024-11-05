<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorldController;
use App\Http\Controllers\MenballController;
use App\Http\Controllers\EventController;


use App\Models\World; // Import model World ที่ต้องการใช้งาน
use App\Models\Menball; // Import model Menball ที่ต้องการใช้งาน
use App\Models\event; // Import model event ที่ต้องการใช้งาน

Route::get('/', function () {
    $worlds = World::all(); // ดึงข้อมูลทั้งหมดจากตาราง World มาเก็บไว้ในตัวแปร $worlds
    $menballs = Menball::all(); // ดึงข้อมูลทั้งหมดจากตาราง Menball มาเก็บไว้ในตัวแปร $menballs
    $events = event::all(); // ดึงข้อมูลทั้งหมดจากตาราง event มาเก็บไว้ในตัวแปร $events


    $uniqueEvents = $events->map(function ($item) {
        return [$item->event, $item->event];
    })->flatten()->unique();

    $uniqueTeamsWomen = $worlds->map(function ($item) {
        return [$item->w_teamone, $item->w_teamtwo];
    })->flatten()->unique();

    $uniqueTeamsMen = $menballs->map(function ($item) {
        return [$item->teamone, $item->teamtwo];
    })->flatten()->unique();
    
    return view('welcome', compact('worlds', 'menballs','uniqueEvents','events','uniqueTeamsWomen', 'uniqueTeamsMen')); // ส่งตัวแปร $worlds และ $menballs ไปยัง view welcome
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('world', WorldController::class);
Route::resource('create', WorldController::class);

Route::resource('menball', MenballController::class);
Route::resource('create', MenballController::class);

Route::resource('event', EventController::class);
Route::resource('create', EventController::class);
