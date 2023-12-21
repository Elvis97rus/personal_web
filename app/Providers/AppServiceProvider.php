<?php

namespace App\Providers;

use App\Enums\LanguageLocale;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('partials.language_switcher', function ($view) {
            $view->with('currentLocale', app()->getLocale());
            $view->with('availableLocales', LanguageLocale::cases());
        });
    }
}
