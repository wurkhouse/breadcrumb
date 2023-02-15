<?php

namespace Wurkhouse\BreadcrumbPackage\Providers;

use Roots\Acorn\ServiceProvider;
use Wurkhouse\BreadcrumbPackage\Console\BreadcrumbCommand;
use Wurkhouse\BreadcrumbPackage\Breadcrumb;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Breadcrumb', function () {
            return new Breadcrumb($this->app);
        });

        $this->mergeConfigFrom(
            __DIR__.'/../../config/breadcrumb.php',
            'breadcrumb'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/breadcrumb.php' => $this->app->configPath('breadcrumb.php'),
        ], 'config');

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views',
            'Breadcrumb',
        );

        $this->commands([
            BreadcrumbCommand::class,
        ]);

        $this->app->make('Breadcrumb');
    }
}
