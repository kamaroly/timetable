<?php

namespace Kamaro\TimeTable;

use Kamaro\TimeTable\Contracts\CourseContract;

class Course implements CourseContract
{
    /**
     * Name of the course to be displayed
     * in the timetable.
     *
     * @var string
     */
    protected $courseName;
    /**
     * Name of the Teacher to be displayed
     * in the timeTable.
     *
     * @var string
     */
    protected $teacherName;
    /**
     * Number of hours not to exceed in
     * a for this course.
     *
     * @var integer
     */
    protected $maxHourPerDay;
    /**
     * Number of Hours not to exceed in
     * a Week for this course.
     *
     * @var [type]
     */
    protected $maxHourPerWeek;

    /**
     * Get the value of courseName.
     */
    public function getCourseName(): string
    {
        return $this->courseName;
    }

    /**
     * Set the value of courseName.
     *
     * @return self
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * Get the value of teacherName.
     */
    public function getTeacherName(): string
    {
        return $this->teacherName;
    }

    /**
     * Set the value of teacherName.
     *
     * @return self
     */
    public function setTeacherName($teacherName)
    {
        $this->teacherName = $teacherName;

        return $this;
    }

    /**
     * Get the value of maxHourPerDay.
     */
    public function getMaxHoursPerDay(): int
    {
        return $this->maxHourPerDay;
    }

    /**
     * Set the value of maxHourPerDay.
     *
     * @return self
     */
    public function setMaxHoursPerDay($maxHourPerDay)
    {
        $this->maxHourPerDay = $maxHourPerDay;

        return $this;
    }

    /**
     * Get the value of maxHourPerWeek.
     */
    public function getMaxHoursPerWeek(): int
    {
        return $this->maxHourPerWeek;
    }

    /**
     * Set the value of maxHourPerWeek.
     *
     * @return self
     */
    public function setMaxHoursPerWeek($maxHourPerWeek)
    {
        $this->maxHourPerWeek = $maxHourPerWeek;

        return $this;
    }
}
