<?php

namespace Kamaro\TimeTable;

use Kamaro\TimeTable\Course;
use PHPUnit\Framework\TestCase;

class CourseTest extends TestCase
{
    public function testItcanSetCourseName()
    {
        $course = new Course();
        $course->setCourseName('Computer Science');
        $this->assertEquals('Computer Science', $course->getCourseName());
    }

    public function testItCanSetTeacherName()
    {
        $course = new Course();
        $course->setTeacherName('Paul');
        $this->assertEquals('Paul', $course->getTeacherName());
    }

    public function testItCanSetMaxHourPerDay()
    {
        $course = new Course();
        $course->setMaxHoursPerDay(2);
        $this->assertEquals(2, $course->getMaxHoursPerDay());
    }

    public function testItCanSetMaxHourPerWeek()
    {
        $course = new Course();
        $course->setMaxHoursPerWeek(2);
        $this->assertEquals(2, $course->getMaxHoursPerWeek());
    }
}
