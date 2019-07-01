<?php

namespace Tests;

use Kamaro\TimeTable\TimeFrame;
use Kamaro\TimeTable\TimeTable;
use PHPUnit\Framework\TestCase;

class TimeTableTest extends TestCase
{
    /** @test assert it can generate timetable from TimeFrame */
    public function testItGeneratesEmptyTimeTable()
    {
        $startHour = 8;
        $endHour = 18;
        $range = ($endHour - $startHour) + 1;

        $timeFrame = new TimeFrame();
        $timeFrame->setStartHour($startHour);
        $timeFrame->setEndHour($endHour);
        $unfilledTimeTable = (new TimeTable($timeFrame))->getUnfilledTimeTable();

        var_dump($unfilledTimeTable);
        // Assert that we have all days
        $this->assertEquals(count($timeFrame->getTimeTableDays()), count($unfilledTimeTable));

        // Check if each day in time table days have operation
        // Hours
        foreach ($unfilledTimeTable as $timeTableDay) {
            $this->assertEquals($range, count($timeTableDay));
        }
    }
}
