<?php

namespace Tests;

use Faker\Factory;
use Kamaro\TimeTable\Course;
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

        // Assert that we have all days
        $this->assertEquals(count($timeFrame->getTimeTableDays()), count($unfilledTimeTable));

        // Check if each day in time table days have operation
        // Hours
        foreach ($unfilledTimeTable as $timeTableDay) {
            $this->assertEquals($range, count($timeTableDay));
        }
    }

    public function testItCanFillTimeTableWithCourses()
    {
        $fake = Factory::create();
        $courses = [];
        // Generate fake courses
        for ($i = 0; $i < 10; ++$i) {
            $course = new Course();
            $course->setCourseName($fake->name);
            $course->setTeacherName($fake->name);
            $course->setMaxHoursPerDay(2);
            $course->setMaxHoursPerWeek(10);

            $courses[] = $course;
        }

        $timeTable = (new TimeTable(
                            new TimeFrame() // TimeFrame
                        )
                     )->getTimeTable($courses);

        foreach ($courses as $course) {
            $this->assertTrue($this->inArrayRecursive($course->getCourseName(), $timeTable));
        }
    }

    public function inArrayRecursive($needle, $haystack, $strict = false)
    {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->inArrayRecursive($needle, $item, $strict))) {
                return true;
            }
        }

        return false;
    }
}
