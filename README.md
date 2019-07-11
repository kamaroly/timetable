# TimeTable

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package helps you to generate a School time table by providing courses, number of hours and teacher per course. It can be used for other purpose, but initially it was build just for schools

## Structure

```
build/
docs/
config/
src/
tests/
vendor/
```

# Requirements

    >= php 7.2

## Install

Via Composer

```bash
$ composer require kamaro/timetable
```

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
    use Kamaro\TimeTable\TimeFrame;

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
    $timeTable = (new TimeTable(
                            new TimeFrame() // TimeFrame
                        )
                 )->getTimeTable($courses);

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
  }
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email kamaroly@gmail.com instead of using the issue tracker.

## Credits

-   [KAMARO][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Kamaro/TimeTable.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Kamaro/TimeTable/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Kamaro/TimeTable.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Kamaro/TimeTable.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Kamaro/TimeTable.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/Kamaro/TimeTable
[link-travis]: https://travis-ci.org/Kamaro/TimeTable
[link-scrutinizer]: https://scrutinizer-ci.com/g/Kamaro/TimeTable/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Kamaro/TimeTable
[link-downloads]: https://packagist.org/packages/Kamaro/TimeTable
[link-author]: https://github.com/kamaroly
[link-contributors]: ../../contributors
