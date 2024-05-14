<?php

use App\Http\Controllers\PagesCOntroller;
use Illuminate\Support\Facades\Route;

Route::get('/home',[PagesController::class,'home']);

Route::get('/estoque',[PagesController::class,'estoque']);

