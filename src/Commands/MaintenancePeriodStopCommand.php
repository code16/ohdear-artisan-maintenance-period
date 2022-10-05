<?php

namespace Code16\OhdearArtisanMaintenancePeriod\Commands;

use Illuminate\Console\Command;
use OhDear\PhpSdk\OhDear;

class MaintenancePeriodStopCommand extends Command
{
    public $signature = 'ohdear:maintenance-period:stop';

    public $description = 'Stop an ohdear maintenance period';

    public function handle(OhDear $ohDear)
    {
        $ohDear->stopSiteMaintenance(
            config('schedule-monitor.oh_dear.site_id')
        );

        return self::SUCCESS;
    }
}
