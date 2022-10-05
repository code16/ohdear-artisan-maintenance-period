<?php

namespace Code16\OhdearArtisanMaintenancePeriod\Commands;

use Illuminate\Console\Command;
use OhDear\PhpSdk\OhDear;

class MaintenancePeriodStartCommand extends Command
{
    public $signature = 'ohdear:maintenance-period:start';

    public $description = 'Start an ohdear maintenance period';

    public function handle(OhDear $ohDear)
    {
        $ohDear->startSiteMaintenance(
            config('schedule-monitor.oh_dear.site_id')
        );

        return self::SUCCESS;
    }
}
