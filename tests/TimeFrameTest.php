<?php

declare(strict_types=1);

namespace Kamaro\TimeTable;

use Kamaro\TimeTable\Exceptions\InvalidEndHourException;
use Kamaro\TimeTable\Exceptions\InvalidStartHourException;

class TimeFrameTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function testCanGenerateWeeklyDays()
    {
        $weekDays = TimeFrame::weekDays();

        $this->assertEquals(7, count($weekDays));
        $this->assertTrue(in_array('monday', $weekDays));
        $this->assertTrue(in_array('tuesday', $weekDays));
        $this->assertTrue(in_array('wednesday', $weekDays));
        $this->assertTrue(in_array('thursday', $weekDays));
        $this->assertTrue(in_array('friday', $weekDays));
        $this->assertTrue(in_array('saturday', $weekDays));
        $this->assertTrue(in_array('sunday', $weekDays));
    }

    /** @test it can geenerate time table daily hours */
    public function testItCanGenerateTimeTableDailyHours()
    {
        $startHour = 8;
        $endHour = 18;
        $range = ($endHour - $startHour + 1);
        $allowedHours = TimeFrame::dailyHours($startHour, $endHour);

        $this->assertEquals($range, count($allowedHours));
        $this->assertTrue(in_array($startHour, $allowedHours));
        $this->assertTrue(in_array($endHour, $allowedHours));
    }

    /** @test throw exception on invalid EndHour */
    public function testItFailsWhenEndHourIsNotValid()
    {
        $startHour = 8;
        $endHour = 24;
        $range = ($endHour - $startHour + 1);
        $this->expectException(InvalidEndHourException::class);
        $allowedHours = TimeFrame::dailyHours($startHour, $endHour);
    }

    /** @test throw exception on invalid EndHour */
    public function testItFailsWhenStartHourIsNotValid()
    {
        $startHour = 24;
        $endHour = 2;
        $range = ($endHour - $startHour + 1);
        $this->expectException(InvalidStartHourException::class);
        $allowedHours = TimeFrame::dailyHours($startHour, $endHour);
    }
}
