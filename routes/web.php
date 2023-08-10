<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/livros', function () {
    return view('livros');
});

Route::get('/edtdados', function () {
    return view('edtdados');
});

Route::get('/detlivro', function () {
    return view('detlivro');
});

Route::get('/cadexclivro', function () {
    return view('cadexclivro');
});