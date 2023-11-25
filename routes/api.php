<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('v1/insurance')
    ->as('v1.insurance:')
    ->group(base_path('routes/v1/routes.php'));
