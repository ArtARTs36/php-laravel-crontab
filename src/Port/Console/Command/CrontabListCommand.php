<?php

namespace ArtARTs36\Crontab\Bridge\Laravel\Port\Console\Command;

use ArtARTs36\Crontab\Builder\CrontabBuilder;
use Illuminate\Console\Command;

class CrontabListCommand extends Command
{
    protected $signature = 'crontab:list';

    public function handle(CrontabBuilder $builder): void
    {
        $this->comment($builder->build()->getAll()->asFile());
    }
}
