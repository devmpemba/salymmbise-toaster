<?php

namespace SalymMbise\Toaster;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ToasterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Views', 'toaster');

        // Publish assets
        $this->publishes([
            __DIR__ . '/../public/toaster.css' => public_path('vendor/toaster/toaster.css'),
            __DIR__ . '/../public/toaster.js' => public_path('vendor/toaster/toaster.js'),
        ], 'public');

        // Blade directive
        Blade::directive('toaster', function () {
            return "<?php echo \\SalymMbise\\Toaster\\Toaster::render(); ?>";
        });
    }

    public function register() {}
}