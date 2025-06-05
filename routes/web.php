<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/create-user', 'create-user');

Route::view('/todo-template', 'todo-template');
