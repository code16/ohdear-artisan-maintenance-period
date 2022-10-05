<?php

namespace Code16\OhdearArtisanMaintenancePeriod\Tests;

use Code16\OhdearArtisanMaintenancePeriod\OhdearArtisanMaintenancePeriodServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Code16\\OhdearArtisanMaintenancePeriod\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            OhdearArtisanMaintenancePeriodServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_ohdear-artisan-maintenance-period_table.php.stub';
        $migration->up();
        */
    }
}
