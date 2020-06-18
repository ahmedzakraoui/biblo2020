<?php

Route::get('/','LivresController@index')->name('acceuil');

Route::get('/add_livre','LivresController@ajouterLivre')->name('ajouter_livre');

