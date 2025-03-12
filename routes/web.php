<?php

use App\Http\Controllers\PublishPodcastController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Podcast Platform
|--------------------------------------------------------------------------
|
| We are giving your voice a platform.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('podcasts/{podcast}/publish', PublishPodcastController::class)
->name('podcasts.publish');
