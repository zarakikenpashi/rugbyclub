<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/faire-un-don', function () {
    return view('donate');
})->name('donate');

Route::get('/contacts', function () {
    return view('contact');
})->name('contacts');

Route::get('/partenaires', function () {
    return view('partners');
})->name('agenda');

Route::get('/actaulités', function () {
    return view('news');
})->name('news');

Route::get('/agenda', function () {
    return view('match');
})->name('agenda');

Route::get('/equipe', function () {
    return view('equipe');
})->name('equipe');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/club', function () {
    return view('club');
})->name('club');

