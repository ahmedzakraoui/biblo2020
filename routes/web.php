<?php

Route::get('/','LivresController@index')->name('acceuil');

Route::get('/add_livre','LivresController@ajouterLivre')->name('ajouter_livre');
Route::post('/add_livre','LivresController@postAjouterLivre')->name('post_ajouter_livre');

