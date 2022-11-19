<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/super-admin', [DashboardController::class, 'index']);
Route::get('course/list', [CourseController::class, 'index']);
Route::get('course/create', [CourseController::class, 'create']);
Route::get('subject/list', [SubjectController::class, 'index']);
Route::get('subject/create', [SubjectController::class, 'create']);
Route::get('syllabus/list', [SyllabusController::class, 'index']);
Route::get('syllabus/create', [SyllabusController::class, 'create']);
Route::get('batch/list', [BatchController::class, 'index']);
Route::get('batch/create', [BatchController::class, 'create']);
Route::get('instructor/list', [InstructorController::class, 'index']);
Route::get('instructor/create', [InstructorController::class, 'create']);
Route::get('student/list', [StudentController::class, 'index']);
Route::get('student/create', [StudentController::class, 'create']);
Route::get('score/list', [ScoreController::class, 'index']);
Route::get('score/create', [ScoreController::class, 'create']);
Route::get('schedule/list', [ScheduleController::class, 'index']);
Route::get('schedule/class', [ScheduleController::class, 'class']);
Route::get('schedule/class-test', [ScheduleController::class, 'classTest']);
Route::get('schedule/exam', [ScheduleController::class, 'exam']);
Route::get('schedule/result', [ScheduleController::class, 'result']);
Route::get('test/list', [TestController::class, 'index']);
Route::get('test/create', [TestController::class, 'create']);
Route::get('notice-board/list', [NoticeBoardController::class, 'index']);
Route::get('notice-board/create', [NoticeBoardController::class, 'create']);
Route::get('message/list', [ChatController::class, 'index']);
Route::get('certificate/list', [CertificateController::class, 'index']);
Route::get('certificate/create', [CertificateController::class, 'create']);
Route::get('settings/store', [SettingController::class, 'settings']);
