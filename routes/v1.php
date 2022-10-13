<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', \App\Api\Smart\Actions\PingAction::class);
