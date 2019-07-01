<?php

declare(strict_types=1);

namespace Kamaro\TimeTable;

class TimeTable
{
    /**
     * Holds timing conditions for this timetable.
     *
     * @var Kamaro\TimeTable\TimeFrame
     */
    protected $timer;

    /**
     * Holds current object instance.
     *
     * @var this
     */
    protected $timeTable;

    /**
     * Create a new Skeleton Instance.
     */
    public function __construct(TimeFrame $timer)
    {
        $this->timer = $timer;
        $this->timeTable = $this->getUnfilledTimeTable();
    }

    /**
     * Generate unfilled Time Table Days.
     *
     * @return array
     */
    public function getUnfilledTimeTable(): array
    {
        $emptyTimeTable = [];
        // Build based on the allowed days
        foreach ($this->timer->getTimeTableDays() as $day) {
            // Make sure each day has allowed hours
            foreach ($this->timer->getOperationalHours() as $hour) {
                $emptyTimeTable[$day][$hour]['hour'] = "{$hour}:00";
                $emptyTimeTable[$day][$hour]['course'] = null;
                $emptyTimeTable[$day][$hour]['teacher'] = null;
            }
        }

        return   $this->timeTable = $emptyTimeTable;
    }

    /**
     * Get TimeTable for given courses.
     *
     * @param array $courses
     *
     * @return array
     */
    public function getTimeTable(array $courses): array
    {
        // 1. Go through each course one by one.
        // 2. Check if Maximum hours per week are not exhausted
        // 3. Check if Daily Hour limit is not exhausted.
        // 4. Daily hour is not exhausted then find slow on time table and fill it
        // 5. Update Daily hours, update weekly hours
        foreach ($this->timeTable as $key => $day) {
            foreach ($day as $hourKey => $hour) {
                foreach ($courses as $course) {
                    $occurencyInWeek = $this->countWeeklyOccurence(
                                            $course->getCourseName(),
                                            $this->timeTable
                                        );

                    if ($occurencyInWeek < $course->getMaxHoursPerWeek()) {
                        // Check occurence of this course today
                        $courseOccurenceToday = $this->countDayOccurence(
                                                    $course->getCourseName(),
                                                    $this->timeTable[$key]
                                                    );

                        // Fill courses in the day if they are not yet exhausted
                        if ($courseOccurenceToday < $course->getMaxHoursPerDay()) {
                            $this->timeTable[$key][$hourKey]['course'] = $course->getCourseName();
                            $this->timeTable[$key][$hourKey]['teacher'] = $course->getTeacherName();
                        }
                    }
                }
            }
        }

        return $this->timeTable;
    }

    public function countWeeklyOccurence(string $courseName, array $timetableWeek)
    {
        $weeklyCount = 0;
        foreach ($timetableWeek as $day) {
            $weeklyCount = $weeklyCount + $this->countDayOccurence($courseName, $day);
        }

        return $weeklyCount;
    }

    /**
     * Count occurence of the course.
     *
     * @param string $courseName
     * @param array  $timeTableDay
     *
     * @return integer
     */
    public function countDayOccurence(string $courseName, array $timeTableDay): int
    {
        $countOccurence = 0;
        foreach ($timeTableDay as $day => $hour) {
            if ($hour['course'] === $courseName) {
                ++$countOccurence;
            }
        }

        return $countOccurence;
    }

    /**
     * Set holds current object instance.
     *
     * @param this $timeTable Holds current object instance
     *
     * @return self
     */
    public function setTimeTable(this $timeTable)
    {
        $this->timeTable = $timeTable;

        return $this;
    }
}
