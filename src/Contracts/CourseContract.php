<?php

namespace Kamaro\TimeTable\Contracts;

interface Coursecontract
{
    /**
     * Cause Name to display in time table.
     *
     * @return string
     */
    public function getCourseName(): string;

    /**
     * Set name of the course.
     *
     * @param string $name
     *
     * @return void
     */
    public function setCourseName(string $name);

    /**
     * Get maximum Hours per day for this cause
     * one Hours = 1 hour.
     *
     * @return integer
     */
    public function getMaxHoursPerDay(): int;

    /**
     * Get maximum Hours per day for this cause
     * one Hours = 1 hour.
     *
     * @param int $maxHoursPerDay
     *
     * @return void
     */
    public function setMaxHoursPerDay(int $maxHoursPerDay);

    /**
     * Get Maximum Hours per Week for this course.
     *
     * @return integer
     */
    public function getMaxHoursPerWeek(): int;

    /**
     * Get Maximum Hours per Week for this course.
     *
     * @param string $maxHoursPerWeek
     *
     * @return void
     */
    public function setMaxHoursPerWeek(string $maxHoursPerWeek);
}
