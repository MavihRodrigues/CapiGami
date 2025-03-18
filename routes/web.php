<?php

use App\Livewire\Admin\Create as AdminCreate;
use App\Livewire\Aluno\Create as AlunoCreate;
use App\Livewire\Aluno\Dashboard;
use App\Livewire\Aluno\Edit;
use App\Livewire\Aluno\Index;
use App\Livewire\Auth\Login;
use App\Livewire\Teacher\Create as TeacherCreate;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/aluno/create', AlunoCreate::class);

Route::get('/aluno/dashboard', Dashboard::class)->middleware(['auth', 'role:aluno'])->name('aluno.dashboard');

Route::get('aluno/editar', Edit::class)->name('aluno.edit');



Route::get('/admin/create', AdminCreate::class);

Route::get('/admin', function(){
    return 'login admin';
})->middleware('auth', 'role:admin')->name('admin.dashboard');





Route::get('/teacher/create', TeacherCreate::class);

Route::get('/teacher', function(){
    return 'login teacher';
})->middleware('auth', 'role:teacher')->name('teacher.dashboard');

Route::get('index/alunos', Index::class);


Route::get('/login', Login::class)->name('login');

