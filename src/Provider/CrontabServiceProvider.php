<?php

namespace ArtARTs36\Crontab\Bridge\Laravel\Provider;

use ArtARTs36\Crontab\Bridge\Laravel\Port\Console\Command\CrontabListCommand;
use ArtARTs36\Crontab\Bridge\Laravel\Port\Console\Command\CrontabSetCommand;
use Illuminate\Support\ServiceProvider;

class CrontabServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            CrontabSetCommand::class,
            CrontabListCommand::class,
        ]);
    }
}
