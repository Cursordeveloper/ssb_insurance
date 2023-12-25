<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'susu-life', 'as' => 'susu-life.'], function (): void {
    // Unprotected routes
    Route::group([], function (): void {
        Route::get(
            uri: '',
        )->name(
            name: 'collection'
        );
    });

    // Protected routes
    Route::group([
        'middleware' => 'auth:user',
    ], function (): void {
    });
});
