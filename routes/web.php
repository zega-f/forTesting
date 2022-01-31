<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\StudentIndex;

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
    return view('livewire.student-index');
});

Route::get('livewire_index',[StudentIndex::class,'render']);
Route::get('students', function() {
    return view('student');
});
