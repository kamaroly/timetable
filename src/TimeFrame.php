<?php

namespace Kamaro\TimeTable;

use Kamaro\TimeTable\Contracts\TimeFrameContract;
use Kamaro\TimeTable\Exceptions\InvalidEndHourException;
use Kamaro\TimeTable\Exceptions\InvalidStartHourException;

class TimeFrame implements TimeFrameContract
{
    /**
     * Week Days for TimeTable.
     *
     * @var array
     */
    protected $timeTableDays = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
    /**
     * Operational Hours.
     *
     * @var array
     */
    protected $operationHours = [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];

    /**
     * Start Hour of the day for timeTable.
     *
     * @var integer
     */
    protected $startHour = 8;
    /**
     * End hour of the day for timetable.
     *
     * @var integer
     */
    protected $endHour = 18;

    /**
     * Get Daily Hours Based on the start and
     * end hour of the day.
     *
     * @param int $startHour
     * @param int $endHour
     *
     * @return void
     */
    public function getOperationalHours(): array
    {
        $allowedHours = [];

        for ($hour = $this->getStartHour(); $hour <= $this->getEndHour(); ++$hour) {
            $allowedHours[] = $hour;
        }

        return $allowedHours;
    }

    /**
     * Set start Hour of the day for timeTable.
     *
     * @param int $startHour start Hour of the day for timeTable
     *
     * @return self
     */
    public function setStartHour(int $startHour)
    {
        // Invalid time passed, deny it
        if ($startHour < 0 || $startHour > 23) {
            throw new InvalidStartHourException("{$startHour} is not a valid day hour", 1);
        }

        $this->startHour = $startHour;

        return $this;
    }

    /**
     * Set end hour of the day for timetable.
     *
     * @param int $endHour end hour of the day for timetable
     *
     * @return self
     */
    public function setEndHour(int $endHour)
    {
        // Invalid time passed, deny it
        if ($endHour < 0 || $endHour > 23) {
            throw new InvalidEndHourException("{$endHour} is not a valid day hour", 1);
        }
        $this->endHour = $endHour;

        return $this;
    }

    /**
     * Get start Hour of the day for timeTable.
     *
     * @return integer
     */
    public function getStartHour(): int
    {
        return $this->startHour;
    }

    /**
     * Get end hour of the day for timetable.
     *
     * @return integer
     */
    public function getEndHour(): int
    {
        return $this->endHour;
    }

    /**
     * Set week Days for TimeTable.
     *
     * @param array $timeTableDays week Days for TimeTable
     *
     * @return self
     */
    public function setTimeTableDays(array $timeTableDays)
    {
        $this->timeTableDays = $timeTableDays;

        return $this;
    }

    /**
     * Get week Days for TimeTable.
     *
     * @return array
     */
    public function getTimeTableDays(): array
    {
        return $this->timeTableDays;
    }
}
