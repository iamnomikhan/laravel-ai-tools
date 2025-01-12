<?php
// src/PackageServiceProvider.php
namespace Nouman\LaravelAiTools;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registering the AiToolsService to be used by the application
        $this->app->singleton('ai-tools', function ($app) {
            return new Services\AiToolsService(); // AiToolsService should be your service class
        });
    }

    public function boot()
    {
        // Publish config file to Laravel's config directory
        $this->publishes([
            __DIR__.'/../config/ai-tools.php' => config_path('ai-tools.php'),
        ]);
    }
}
