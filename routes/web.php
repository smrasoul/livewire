<?php

use App\Livewire\FullPageComponent;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/create-user', 'create-user');

Route::view('/todo-template', 'todo-template');

Route::view('/skeleton-loader', 'skeleton-example');

Route::view('/search-list', 'search-list');

Route::view('/mount-basics', 'mount-basic');

Route::view('/computed-properties', 'computed-property');

Route::get('/user/{user}', FullPageComponent::class);

Route::view('/form-objects', 'form-objects');
