<?php

namespace Raffles\Modules\B2bplanner\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('b2bplanner', 'Resources/Lang', 'app'), 'b2bplanner');
        $this->loadViewsFrom(module_path('b2bplanner', 'Resources/Views', 'app'), 'b2bplanner');
        $this->loadMigrationsFrom(module_path('b2bplanner', 'Database/Migrations', 'app'), 'b2bplanner');
        $this->loadConfigsFrom(module_path('b2bplanner', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('b2bplanner', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
