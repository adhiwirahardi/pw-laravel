<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/education', [HomeController::class, 'education'])->name('education');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('portofolio');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/skill', [SkillController::class, 'skill'])->name('skill');
Route::get('/projects', [ProjectController::class, 'project'])->name('project');
Route::get('/projects/usedcarpriceprediction', [ProjectController::class, 'ucpp'])->name('project.ucpp');
Route::get('/projects/creditcardfrauddetection', [ProjectController::class, 'ccfd'])->name('project.ccfd');
Route::get('/projects/forexanalysis', [ProjectController::class, 'fa'])->name('project.fa');
Route::post('/contact', [ContactController::class, 'submitContact'])->name('contact.submit');





