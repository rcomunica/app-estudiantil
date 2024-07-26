<?php

use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\Calendar;
use App\Livewire\Admin\Home as AdminHome;
use App\Livewire\Admin\Pae;
use App\Livewire\Admin\Pqs as AdminPqs;
use App\Livewire\Admin\Student;
use App\Livewire\Home;
use App\Livewire\Pqs;
use App\Livewire\Snacks;

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

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::prefix('student')->group(function () {
    // Search student
    Route::post('enter', [HomeController::class, 'logginStudent'])->name('student.setUser');
    Route::get('enter', [HomeController::class, 'loggin'])->name('student.enter');

    Route::get('pae', Snacks::class)->name('student.snack');
    Route::get('pqs', Pqs::class)->name('student.pqs');
    Route::get('calendar', [CalendarController::class, 'index'])->name('student.calendar');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', AdminHome::class)->name('dashboard');

    Route::prefix('admin')->group(function () {

        Route::get('pae', Pae::class)->name('admin.pae');
        Route::get('pqs', AdminPqs::class)->name('admin.pqs');
        Route::get('calendar', Calendar::class)->name('admin.calendar');
        Route::get('students', Student::class)->name('admin.student');

        // Show
        Route::get('pae/{pae}', Pae::class)->name('admin.pae.show');
        Route::get('pqs/{pqs}', AdminPqs::class)->name('admin.pqs.show');
    });
});
