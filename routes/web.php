<?php

use App\Http\Controllers\pages\CommentairesController;
use App\Http\Controllers\pages\PosteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PosteController::class,'create'])
       ->name('posts');

Route::post('/saisie_poste', [PosteController::class,'store'])
       ->name('saisie_poste');

Route::get('/comments/{idPost}', [CommentairesController::class,'show'])
       ->name('commentaires');

Route::post('/saisie_commentaire', [CommentairesController::class,'store'])
       ->name('saisie_commentaire');
