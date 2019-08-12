<?php
/**
 * Created by PhpStorm.
 * User: ravin
 * Date: 4/3/19
 * Time: 12:05 PM
 */

namespace ImportErrors\ImportDataError;

use Illuminate\Support\ServiceProvider;

class ImportErrorsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Mailer::class, function () {
            return new ImportDataError();
        });

        $this->app->alias(ImportDataError::class, 'import_data');
    }

    public function boot() {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
