<?php

use App\Livewire\Admin\Create as AdminCreate;
use App\Livewire\Aluno\Create;
use App\Livewire\Aluno\Index;
use App\Livewire\Auth\Login;
use App\Models\Professor;
use Illuminate\Support\Facades\Route;

Route::get('/aluno/create', Create::class);

Route::get('/admin/create', AdminCreate::class);

Route::get('/create/teacher', Professor::class);

Route::get('/aluno', function(){
    return 'login aluno';
})->middleware('auth', 'role:aluno')->name('aluno.dashboard');

Route::get('/admin', function(){
    return 'login admin';
})->middleware('auth', 'role:admin')->name('admin.dashboard');

Route::get('/teacher', function(){
    return 'login teacher';
})->middleware('auth', 'role:teacher')->name('teacher.dashboard');

Route::get('/login', Login::class)->name('login');
