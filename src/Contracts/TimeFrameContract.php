<?php

namespace Kamaro\TimeTable\Contracts;

interface TimeFrameContract
{
    /**
     * Get operation Hours per Day.
     *
     * @param int $startHour
     * @param int $endHour
     *
     * @return array
     */
    public function getOperationalHours(): array;

    /**
     * Get starting our of the day.
     *
     * @return int
     */
    public function getStartHour(): int;

    /**
     * Get end hour of the day.
     *
     * @return int
     */
    public function getEndHour(): int;

    /**
     * Get time Table days to generate.
     *
     * @return array
     */
    public function getTimeTableDays(): array;

    /**
     * Set starting Hour.
     *
     * @param int $startHour
     *
     * @return this
     */
    public function setStartHour(int $startHour);

    /**
     * Set EndHour.
     *
     * @param int $endHour
     *
     * @return this
     */
    public function setEndHour(int $endHour);

    /**
     * Set Timetable days.
     *
     * @param array $timeTableDays
     *
     * @return this
     */
    public function setTimeTableDays(array $timeTableDays);
}
