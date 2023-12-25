<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// Routes without {customer} parameter
Route::prefix('v1/insurance')
    ->as('v1:insurance.')
    ->group(base_path('routes/v1/common.php'));

// Routes with {customer} parameter
Route::prefix('v1/insurance/customers/{customer}')
    ->as('v1:insurance.customers.')
    ->group(base_path('routes/v1/main.php'))
    ->whereUuid(
        parameters: ['customer'],
    );
