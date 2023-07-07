<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro(
            'highlight',
            static function (string $needle, string $string, string $opening = '<strong>', string $closing = '</strong>') {
                return preg_replace(
                    '/' . preg_quote($needle) . '/i',
                    $opening . '$0' . $closing,
                    $string
                );
            }
        );

    }
}
