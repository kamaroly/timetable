# Installation

    composer require kamaro/timetable

# Requirements

    >= php 7.2

# Features

-   Course
    -   Course Name
    -   Teacher name
    -   Maximum Hours per Day
    -   Maximum Hours per Week.
-   Timer
    -   Start Day
    -   End Day
    -   Start Hour
    -   End Hour
-   TimeTable
    -   Generate empty Time Table
    -   Generate TimeTable
    -   Set break time (TBD)
    -   set Weekly break days(TBD);

# Usage

```php
    use Kamaro\TimeTable\Course;
    use Kamaro\TimeTable\TimeTable;

    // Generate fake courses
    $courses = [];
    for ($i = 0; $i < 10; ++$i) {
        $course = new Course();
        $course->setCourseName($fake->name);
        $course->setTeacherName($fake->name);
        $course->setMaxHoursPerDay(2);
        $course->setMaxHoursPerWeek(10);
        $courses[] = $course;
    }
    // Generate TimeTable
    $timeTable = (new TimeTable())->getTimeTable($courses);

    echo json_encode($timeTable);
```

Will output below time table

```js
{
  "monday": {
    "8": {
      "hour": "8:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "9": {
      "hour": "9:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "10": {
      "hour": "10:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "11": {
      "hour": "11:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "12": {
      "hour": "12:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "13": {
      "hour": "13:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "14": {
      "hour": "14:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "15": {
      "hour": "15:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "16": {
      "hour": "16:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "17": {
      "hour": "17:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "18": {
      "hour": "18:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    }
  },
  "tuesday": {
    "8": {
      "hour": "8:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "9": {
      "hour": "9:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "10": {
      "hour": "10:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "11": {
      "hour": "11:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "12": {
      "hour": "12:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "13": {
      "hour": "13:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "14": {
      "hour": "14:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "15": {
      "hour": "15:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "16": {
      "hour": "16:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "17": {
      "hour": "17:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "18": {
      "hour": "18:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    }
  },
  "wednesday": {
    "8": {
      "hour": "8:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "9": {
      "hour": "9:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "10": {
      "hour": "10:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "11": {
      "hour": "11:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "12": {
      "hour": "12:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "13": {
      "hour": "13:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "14": {
      "hour": "14:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "15": {
      "hour": "15:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "16": {
      "hour": "16:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "17": {
      "hour": "17:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "18": {
      "hour": "18:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    }
  },
  "thursday": {
    "8": {
      "hour": "8:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "9": {
      "hour": "9:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "10": {
      "hour": "10:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "11": {
      "hour": "11:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "12": {
      "hour": "12:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "13": {
      "hour": "13:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "14": {
      "hour": "14:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "15": {
      "hour": "15:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "16": {
      "hour": "16:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "17": {
      "hour": "17:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "18": {
      "hour": "18:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    }
  },
  "friday": {
    "8": {
      "hour": "8:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "9": {
      "hour": "9:00",
      "course": "Dr. Keven Spencer MD",
      "teacher": "Rita Reynolds"
    },
    "10": {
      "hour": "10:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "11": {
      "hour": "11:00",
      "course": "Prof. Talon Wuckert DVM",
      "teacher": "Melba Hammes"
    },
    "12": {
      "hour": "12:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "13": {
      "hour": "13:00",
      "course": "Krystel Veum",
      "teacher": "Lily Smitham"
    },
    "14": {
      "hour": "14:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "15": {
      "hour": "15:00",
      "course": "Sarina Flatley II",
      "teacher": "Prof. Pasquale Fritsch"
    },
    "16": {
      "hour": "16:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "17": {
      "hour": "17:00",
      "course": "Sandrine Wiegand",
      "teacher": "Henriette Kertzmann"
    },
    "18": {
      "hour": "18:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    }
  },
  "saturday": {
    "8": {
      "hour": "8:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    },
    "9": {
      "hour": "9:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    },
    "10": {
      "hour": "10:00",
      "course": "Werner Hane",
      "teacher": "Roslyn Hodkiewicz"
    },
    "11": {
      "hour": "11:00",
      "course": "Werner Hane",
      "teacher": "Roslyn Hodkiewicz"
    },
    "12": {
      "hour": "12:00",
      "course": "Kennedy Satterfield",
      "teacher": "Stephany Botsford"
    },
    "13": {
      "hour": "13:00",
      "course": "Kennedy Satterfield",
      "teacher": "Stephany Botsford"
    },
    "14": {
      "hour": "14:00",
      "course": "Dr. Jordan Considine",
      "teacher": "Dr. Aniyah Larson MD"
    },
    "15": {
      "hour": "15:00",
      "course": "Dr. Jordan Considine",
      "teacher": "Dr. Aniyah Larson MD"
    },
    "16": {
      "hour": "16:00",
      "course": "Mr. Aric Willms DVM",
      "teacher": "Selena Beer"
    },
    "17": {
      "hour": "17:00",
      "course": "Mr. Aric Willms DVM",
      "teacher": "Selena Beer"
    },
    "18": {
      "hour": "18:00",
      "course": null,
      "teacher": null
    }
  },
  "sunday": {
    "8": {
      "hour": "8:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    },
    "9": {
      "hour": "9:00",
      "course": "Jimmie Fritsch",
      "teacher": "Mrs. Leonora Hill Jr."
    },
    "10": {
      "hour": "10:00",
      "course": "Werner Hane",
      "teacher": "Roslyn Hodkiewicz"
    },
    "11": {
      "hour": "11:00",
      "course": "Werner Hane",
      "teacher": "Roslyn Hodkiewicz"
    },
    "12": {
      "hour": "12:00",
      "course": "Kennedy Satterfield",
      "teacher": "Stephany Botsford"
    },
    "13": {
      "hour": "13:00",
      "course": "Kennedy Satterfield",
      "teacher": "Stephany Botsford"
    },
    "14": {
      "hour": "14:00",
      "course": "Dr. Jordan Considine",
      "teacher": "Dr. Aniyah Larson MD"
    },
    "15": {
      "hour": "15:00",
      "course": "Dr. Jordan Considine",
      "teacher": "Dr. Aniyah Larson MD"
    },
    "16": {
      "hour": "16:00",
      "course": "Mr. Aric Willms DVM",
      "teacher": "Selena Beer"
    },
    "17": {
      "hour": "17:00",
      "course": "Mr. Aric Willms DVM",
      "teacher": "Selena Beer"
    },
    "18": {
      "hour": "18:00",
      "course": null,
      "teacher": null
    }
  }
}
```
