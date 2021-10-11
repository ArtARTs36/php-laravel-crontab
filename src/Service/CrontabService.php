<?php

namespace ArtARTs36\Crontab\Bridge\Laravel\Service;

use ArtARTs36\Crontab\Contract\CrontabInterface;
use ArtARTs36\Crontab\Data\CrontabDefinition;
use ArtARTs36\Crontab\Data\Task;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Console\Scheduling\Schedule;

class CrontabService
{
    public function set(CrontabInterface $crontab, Schedule $schedule): CrontabDefinition
    {
        return $crontab->set($this->scheduleToTasks($schedule));
    }

    protected function scheduleToTasks(Schedule $schedule): array
    {
        return array_map(function (Event $event) {
            return new Task($event->expression, $event->command);
        }, $schedule->events());
    }
}
