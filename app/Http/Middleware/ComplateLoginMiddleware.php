<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ComplateLoginMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $client = $request->user()->client;

        $onBoardingApp = Application::where('name', '=', 'onBoarding')->first();
        if (!$client->application->contains($onBoardingApp) || !$client->onBoardingConfiguration->is_active) {
            abort(403);
        }

        return $next($request);
    }
}
