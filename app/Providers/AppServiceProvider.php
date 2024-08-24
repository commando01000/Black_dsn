<?php

namespace App\Providers;

use App\Models\Design;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register() {}

    public function boot()
    {
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        if (Schema::hasTable('designs')) {
            $myDesigns = Design::all();
            view()->share('myDesigns', $myDesigns);
        }

        Paginator::useBootstrapFive();
    }
}
