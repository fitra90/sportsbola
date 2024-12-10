<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\MatchStatsController;
use App\Http\Controllers\StandingController;

Route::get('/teams', [TeamController::class, 'index']); // Fetch all teams
Route::get('/teams/{id}', [TeamController::class, 'show']); // Fetch a specific team
Route::post('/teams', [TeamController::class, 'store']); // Add a new team
Route::put('/teams/{id}', [TeamController::class, 'update']); // Update a team
Route::delete('/teams/{id}', [TeamController::class, 'destroy']); // Delete a team

Route::get('/players', action: [PlayerController::class, 'index']); // Fetch all players
Route::get('/players/{id}', [PlayerController::class, 'show']); // Fetch a specific player
Route::post('/players', [PlayerController::class, 'store']); // Add a new player
Route::put('/players/{id}', [PlayerController::class, 'update']); // Update a player
Route::delete('/players/{id}', [PlayerController::class, 'destroy']); // Delete a player

Route::get('/matchstates', action: [MatchController::class, 'index']); // Fetch all matches
Route::get('/match/{id}', [MatchController::class, 'show']); // Fetch a specific match
Route::post('/match', [MatchController::class, 'store']); // Add a new match
Route::put('/match/{id}', [MatchController::class, 'update']); // Update a match
Route::delete('/match/{id}', [MatchController::class, 'destroy']); // Delete a match

Route::get('/matchstat', action: [MatchStatsController::class, 'index']); // Fetch all matches
Route::get('/matchstat/{id}', [MatchStatsController::class, 'show']); // Fetch a specific match
Route::post('/matchstat', [MatchStatsController::class, 'store']); // Add a new match
Route::put('/matchstat/{id}', [MatchStatsController::class, 'update']); // Update a match
Route::delete('/matchstat/{id}', [MatchStatsController::class, 'destroy']); // Delete a match

Route::get('/standings', action: [StandingController::class, 'index']); // Fetch all matches
Route::get('/standings/{id}', [StandingController::class, 'show']); // Fetch a specific match
Route::post('/standings', [StandingController::class, 'store']); // Add a new match
Route::put('/standings/{id}', [StandingController::class, 'update']); // Update a match
Route::delete('/standings/{id}', [StandingController::class, 'destroy']); // Delete a match
