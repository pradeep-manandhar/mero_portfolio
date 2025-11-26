<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProgrammerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/user' , function(){
    return view('user');
});
Route::get("/user_role", function(){
    return view("user_role");
});

//Profile
// Route::get('/profile', function(){
//     return view('frontend.profile');
// });

Route::middleware(['auth'])->group(function(){
//Porfolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/dashboard', [PortfolioController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');
Route::put('/profile/edit/{id}', [UserController::class, 'update'])->name('profile.update');

//Skills routes
Route::get('/skills', [SkillController::class,'index'])->name('skills');
Route::get('/skills/create', [SkillController::class,'create_form'])->name('skills.create');
Route::post('/skills/create',[SkillController::class,'store']);
Route::get('/skills/view/{id}',[SkillController::class,'show'])->name('skills.view');
Route::get('/skills/edit/{id}',[SkillController::class,'edit'])->name('skills.edit');
Route::put('/skills/edit/{id}',[SkillController::class,'update'])->name('skills.update');
Route::delete('/skills/delete/{id}',[SkillController::class, 'destroy']);


//Experience Routes
Route::get('/experience', [ExperienceController::class,'index'])->name('experience');
Route::get('/experience/create',[ExperienceController::class,'create_form'])->name('experience.create');
Route::post('/experience/create',[ExperienceController::class,'store']);
Route::delete('/experience/delete/{id}',[ExperienceController::class,'destroy'])->name('experience.destroy');
Route::get('/experience/view/{id}',[ExperienceController::class,'show'])->name('experience.view');
Route::get('/experience/edit/{id}',[ExperienceController::class,'edit'])->name('experience.edit');
Route::put('/experience/edit/{id}',[ExperienceController::class,'update'])->name('experience.update');


//Project routes
Route::get('/projects', [ProjectController::class,'index'])->name('project');
Route::get('/projects/create',[ProjectController::class,'create_form'])->name('projects.create');
Route::post('/projects/create',[ProjectController::class,'create']);
Route::get('/projects/edit/{id}',[ProjectController::class,'edit'])->name('projects.edit');
Route::put('/projects/edit/{id}',[ProjectController::class,'update'])->name('projects.update');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
Route::get('/projects/view/{id}',[ProjectController::class,'show'])->name('projects.show');


//Contact
Route::get('/contact',[PortfolioController::class,'contact']);
Route::post('/contact/create',[PortfolioController::class,'contact_create']);
Route::delete('/contact/delete/{id}',[PortfolioController::class,'destroy']);

});
//API
Route::get('/dog/random',[ApiController::class,'randomImage']);


//Pradeep portfolio
Route::prefix('portfolio')->group(function(){
     Route::get('/', [PortfolioController::class, 'index']);
     Route::get('/projects', [PortfolioController::class, 'projects']);
     Route::get('/skills', [PortfolioController::class, 'skills']);
     Route::get('/experiences', [PortfolioController::class, 'experiences']);
});

Route::get('/ref', function(){
    return view('frontend.index');
});


// Route::get('/hero', function(){
//     return view('frontend.hero');
// });

Route::get('/res', function(){
    return view('frontend.responsive');
});
