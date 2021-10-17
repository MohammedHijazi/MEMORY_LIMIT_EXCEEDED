<?php

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VotesController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[QuestionsController::class, 'index'])
    ->name('questions.index');
Route::get('questions/create', [QuestionsController::class, 'create'])
    ->name('questions.create')
    ->middleware('auth');
Route::post('questions', [QuestionsController::class, 'store'])
    ->name('questions.store')
    ->middleware('auth');
Route::get('questions/{id}', [QuestionsController::class, 'show'])
    ->name('questions.show');
Route::get('questions/{id}/edit', [QuestionsController::class, 'edit'])
    ->name('questions.edit')
    ->middleware('auth');
Route::put('questions/{id}', [QuestionsController::class, 'update'])
    ->name('questions.update')
    ->middleware('auth');
Route::delete('questions/{id}', [QuestionsController::class, 'destroy'])
    ->name('questions.destroy')
    ->middleware('auth');

Route::post('answers', [AnswersController::class, 'store'])
    ->name('answers.store')
    ->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('profile/{id}',[ProfileController::class,'index'])->middleware('auth')->name('profile');

Route::get('tag/{id}',[TagController::class,'index'])->name('tag');

require __DIR__.'/auth.php';

Route::post('q_vote', [VotesController::class, 'question_vote'])->name('q_upvote')->middleware('auth');

Route::post('a_vote', [VotesController::class, 'answer_vote'])->name('a_upvote')->middleware('auth');

Route::get('search',[QuestionsController::class,'search'])->name('search');

Route::get('notifications',[NotificationsController::class,'index'])->name('notifications');
Route::get('notifications/{id}',[NotificationsController::class,'show'])->name('notifications.read');
