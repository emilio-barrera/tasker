<?php

use App\Http\Controllers\ProjectActivityController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TodoActivityController;
use App\Http\Controllers\TodoController;
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

Route::resources([
    'todos' => TodoController::class,
    'todo_activities' => TodoActivityController::class,
    'notes' => NoteController::class,
    'projects' => ProjectController::class ,
    'project_activities' => ProjectActivityController::class ,
]);

Route::get('/', function () {
    return view('welcome');
});

