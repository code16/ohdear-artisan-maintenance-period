<?php

namespace Code16\OhdearArtisanMaintenancePeriod;

use Code16\OhdearArtisanMaintenancePeriod\Commands\MaintenancePeriodStartCommand;
use Code16\OhdearArtisanMaintenancePeriod\Commands\MaintenancePeriodStopCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OhdearArtisanMaintenancePeriodServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ohdear-artisan-maintenance-period')
            ->hasCommand(MaintenancePeriodStartCommand::class)
            ->hasCommand(MaintenancePeriodStopCommand::class);
    }
}
