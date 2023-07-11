<?php

declare(strict_types=1);

namespace App\Http\Middleware\Headers;

use App\Traits\ResponseBuilder;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllowMiddleware
{
    use ResponseBuilder;

    public function handle(Request $request, Closure $next, string ...$methods): Response
    {
        $response = $next($request);

        if (! in_array($request->method(), $methods)) {
            return $this->resourcesResponseBuilder(
                status: false,
                code: Response::HTTP_UNAUTHORIZED,
                message: 'Unauthorised access.',
                description: 'Method not allowed.'
            );
        }

        return $response;
    }
}
