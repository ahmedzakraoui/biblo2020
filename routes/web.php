<?php

Route::get('/','LivresController@index')->name('acceuil');

Route::get('/add_livre','LivresController@ajouterLivre')->name('ajouter_livre');
Route::post('/add_livre','LivresController@postAjouterLivre')->name('post_ajouter_livre');

Route::get('/voir_livre/{id}','LivresController@voirLivre')->name('voir_livre');
Route::get('/supprimer_livre/{id}','LivresController@supprimerLivre')->name('supprimer_livre');

