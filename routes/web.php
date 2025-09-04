<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login']);



Route::get('/user' , function(){
    return view('user');
});
Route::get("/user_role", function(){
    return view("user_role");
});

//Skills routes
Route::get('/skills', [SkillController::class,'index'])->name('skills');
Route::get('/skills/create', [SkillController::class,'create_form'])->name('skills.create');
Route::post('/skills/create',[SkillController::class,'store']);

//Experience Routes
Route::get('/experience', [ExperienceController::class,'index'])->name('experience');
Route::get('/experience/create',[ExperienceController::class,'create_form'])->name('experience.create');
Route::post('/experience/create',[ExperienceController::class,'store']);

//Project routes
Route::get('/projects', [ProjectController::class,'index'])->name('project');
