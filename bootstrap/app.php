<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

         $middleware->alias([
                    'admin.guest' => \App\Http\Middleware\AuthRedirect::class,
                    'admin.auth'  => \App\Http\Middleware\Authentication::class,
                ]);

         $middleware->redirectTo(
             guests:'/shop/login',
             users:'/shop/dashboard',
         );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
