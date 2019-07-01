<?php

declare(strict_types=1);

namespace Kamaro\TimeTable;

class TimeTable
{
    protected $timer;

    /**
     * Create a new Skeleton Instance.
     */
    public function __construct(TimeFrame $timer)
    {
        $this->timer = $timer;
    }

    /**
     * Generate unfilled Time Table Days.
     *
     * @return array
     */
    public function getUnfilledTimeTable(): array
    {
        $emptyTimeTable = [];
        // Build based on the allowed days
        foreach ($this->timer->getTimeTableDays() as $day) {
            // Make sure each day has allowed hours
            foreach ($this->timer->getOperationalHours() as $hour) {
                $emptyTimeTable[$day]["$hour:00"] = null;
            }
        }

        return $emptyTimeTable;
    }
}
