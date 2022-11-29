<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Routing;
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
    return view('index');
})->name('/');

Route::prefix("login")->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name('login-page');
    Route::post('/validation', [AuthController::class, 'login']);
});

Route::get('logout', [AuthController::class, 'logout']);

// -- Applications and Registration start ----
Route::prefix("applications")->group(function () {

    Route::name("choice")->prefix("choice")->group(function () {

        //user choices
        Route::get('students', [AuthController::class, 'studentChoice']);
        Route::get('lecturers', [AuthController::class, 'lecturerChoice']);
        Route::get('staff', [AuthController::class, 'staffChoice']);

        //form data from user application; dependent on user choice
        Route::post('submission', [AuthController::class, 'choiceApplication']);
        Route::post('staff-submission', [AuthController::class, 'staff_choiceApplication']);

        //form data from application approved process
        Route::post('students', [AuthController::class, 'studentApplication']);
        Route::post('lecturers', [AuthController::class, 'lecturerApplication']);
        Route::post('staff', [AuthController::class, 'staffApplication']);
    });
});
// -- Applications and Registration end ----

// -- Student start ----
Route::prefix("student")->group(function () {
    Route::get('/', [Routing::class, 'students']);
    Route::get('register', function () {
        return view('students.register');
    });
    Route::post('register',[RegistrationController::class,'extractData']);
});
// -- Student end ----

// -- Lecturer start ----
Route::prefix("lecturer")->group(function () {
    Route::get('/', [Routing::class, 'lecturers']);
    Route::get('register', function () {
        return view('lecturers.register');
    });
    Route::post('register',[RegistrationController::class,'extractData']);
});
// -- Lecturer end ----

// -- Staff start ----
Route::prefix("staff")->group(function () {
    Route::get('/', [Routing::class, 'staff']);
    Route::get('register', function () {
        return view('staff.register');
    });
    Route::post('register',[RegistrationController::class,'extractData']);
});
// -- Staff end ----

// -- Admin start ----
Route::prefix("admin")->group(function () {
    Route::get('/', [Routing::class, 'admin']);
    Route::post('student-email', [ApplicationsController::class, 'studentApplications']);
    Route::post('lecturer-email', [ApplicationsController::class, 'lecturerApplications']);
    Route::post('staff-email', [ApplicationsController::class, 'staffApplications']);
});
// -- Admin end ----
