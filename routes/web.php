<?php

Route::get('/','LivresController@index')->name('acceuil');

Route::get('/add_livre','LivresController@ajouterLivre')->name('ajouter_livre');
Route::post('/add_livre','LivresController@postAjouterLivre')->name('post_ajouter_livre');

Route::get('/edit_livre/{id}','LivresController@editerLivre')->name('editer_livre');
Route::post('/edit_livre/{id}','LivresController@postEditerLivre')->name('post_editer_livre');

Route::get('/voir_livre/{id}','LivresController@voirLivre')->name('voir_livre');
Route::get('/supprimer_livre/{id}','LivresController@supprimerLivre')->name('supprimer_livre');

Route::get('/add_categorie','CategoriesController@ajouterCategorie')->name('ajouter_categorie');
Route::post('/add_categorie','CategoriesController@postAjouterCategorie')->name('post_ajouter_categorie');

