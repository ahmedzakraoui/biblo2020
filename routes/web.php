<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajouter_livre', function () {
   return view('ajouter_livre');
});

