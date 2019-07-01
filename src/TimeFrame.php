<?php

namespace Kamaro\TimeTable;

use Kamaro\TimeTable\Exceptions\InvalidEndHourException;
use Kamaro\TimeTable\Exceptions\InvalidStartHourException;

class TimeFrame
{
    /**
     * Get WeekDays.
     *
     * @return array
     */
    public static function weekDays()
    {
        return [
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday',
            'saturday',
            'sunday',
        ];
    }

    /**
     * Get Daily Hours Based on the start and
     * end hour of the day.
     *
     * @param int $startHour
     * @param int $endHour
     *
     * @return void
     */
    public static function dailyHours(int $startHour, int $endHour)
    {
        if ($startHour > 23 || $startHour < 0) {
            throw new InvalidStartHourException("{$startHour} is not a valid day time hour", 1);
        }
        if ($endHour > 23 || $endHour < 0) {
            throw new InvalidEndHourException("{$endHour} is not a valid day time hour", 1);
        }

        $allowedHours = [];

        for ($hour = $startHour; $hour <= $endHour; ++$hour) {
            $allowedHours[] = $hour;
        }

        return $allowedHours;
    }
}
