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
        $weekDays = (new TimeFrame())->getTimeTableDays();

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
    public function testItCanGenerateTimeTablegetOperationalHours()
    {
        $timeFrame = new TimeFrame();
        $timeFrame->setStartHour(8);
        $timeFrame->setEndHour(18);
        $allowedHours = $timeFrame->getOperationalHours();

        $this->assertTrue(in_array(8, $allowedHours));
        $this->assertTrue(in_array(18, $allowedHours));
    }

    /** @test throw exception on invalid EndHour */
    public function testItFailsWhenEndHourIsNotValid()
    {
        $this->expectException(InvalidEndHourException::class);
        $timeFrame = new TimeFrame();
        $timeFrame->setStartHour(8);
        $timeFrame->setEndHour(24);
        $allowedHours = $timeFrame->getOperationalHours();
    }

    /** @test throw exception on invalid EndHour */
    public function testItFailsWhenStartHourIsNotValid()
    {
        $this->expectException(InvalidStartHourException::class);
        $timeFrame = new TimeFrame();
        $timeFrame->setStartHour(24);
        $timeFrame->setEndHour(2);
        $allowedHours = $timeFrame->getOperationalHours();
    }
}
