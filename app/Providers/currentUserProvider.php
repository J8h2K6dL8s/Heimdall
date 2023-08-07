<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class currentUserProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('currentUser', function () {
            $user = auth('sanctum')->user();
            return  $user ;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
