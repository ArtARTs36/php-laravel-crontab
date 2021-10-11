<?php

namespace ArtARTs36\Crontab\Bridge\Laravel\Port\Console\Command;

use ArtARTs36\Crontab\Bridge\Laravel\Service\CrontabService;
use ArtARTs36\Crontab\Builder\CrontabBuilder;
use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;

class CrontabSetCommand extends Command
{
    protected $signature = 'crontab:set {--dry-run}';

    public function handle(CrontabBuilder $builder, CrontabService $service, Schedule $schedule): void
    {
        if ($this->option('dry-run')) {
            $builder->dryRun();
            $this->warn('This could be Crontab:');
        }

        $this->comment($service->set($builder->build(), $schedule)->asFile());
    }
}
