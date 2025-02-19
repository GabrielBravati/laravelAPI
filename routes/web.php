<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zerozero', function () {
    return view('zerozero');
});