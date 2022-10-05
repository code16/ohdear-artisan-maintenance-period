<?php

namespace Code16\OhdearArtisanMaintenancePeriod\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Code16\OhdearArtisanMaintenancePeriod\OhdearArtisanMaintenancePeriod
 */
class OhdearArtisanMaintenancePeriod extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Code16\OhdearArtisanMaintenancePeriod\OhdearArtisanMaintenancePeriod::class;
    }
}
