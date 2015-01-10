<?php

namespace Faker\Provider;

/**
 * @author Jake Soward
 */
class Cron extends \Faker\Provider\Base
{
    public function cronMinute()
    {
        $possibilities = array();

        for ($i = 0; $i < 3; $i++) {
            $min = $this->randomElement(array( '*', $this->numberBetween(0, 59) ));

            if ($this->generator->boolean(30)) {
                $possibilities[] = $min.'/'.$this->numberBetween(1, 59);
                continue;
            }

            if ($min !== '*' && $min < 58 && $this->generator->boolean(30)) {
                $possibilities[] = $min.'-'.$this->numberBetween($min+1, 59);
                continue;
            }

            $possibilities[] = $min;
        }

        $combined = array_unique($possibilities);
        $possibilities[] = implode(',', $this->randomElements($combined, count($combined)));

        return $this->randomElement($possibilities);
    }

    public function cronHour()
    {
        $possibilities = array();

        for ($i = 0; $i < 3; $i++) {
            $hour = $this->randomElement(array( '*', $this->numberBetween(0, 23) ));

            if ($this->generator->boolean(30)) {
                $possibilities[] = $hour.'/'.$this->numberBetween(1, 23);
                continue;
            }

            if ($hour !== '*' && $hour < 20 && $this->generator->boolean(3)) {
                $possibilities[] = $hour.'-'.$this->numberBetween($hour+1, 23);
                continue;
            }

            $possibilities[] = $hour;
        }

        $combined = array_unique($possibilities);
        $possibilities[] = implode(',', $this->randomElements($combined, count($combined)));

        return $this->randomElement($possibilities);
    }

    public function cronDayOfMonth($extended = true)
    {
        $possibilities = array();

        for ($i = 0; $i < 3; $i++) {
            $elements = array( '*', $this->numberBetween(1, 31) );
            if ($extended) {
                $elements[] = 'L';
            }
            $day = $this->randomElement($elements);

            if ($day !== 'L' && $this->generator->boolean(30)) {
                $possibilities[] = $day.'/'.$this->numberBetween(1, 31);
                continue;
            }

            if (is_numeric($day) && $day < 28 && $this->generator->boolean(30)) {
                $possibilities[] = $day.'-'.$this->numberBetween($day+1, 31);
                continue;
            }

            if ($extended && is_numeric($day) && $this->generator->boolean(30)) {
                $possibilities[] = $day.'W';
                continue;
            }

            $possibilities[] = $day;
        }

        $combined = array_unique($possibilities);
        $possibilities[] = implode(',', $this->randomElements($combined, count($combined)));

        return $this->randomElement($possibilities);
    }

    public function cronMonth()
    {
        $possibilities = array();

        for ($i = 0; $i < 3; $i++) {
            $month = $this->randomElement(array( '*', $this->numberBetween(1, 12) ));

            if ($this->generator->boolean(30)) {
                $possibilities[] = $month.'/'.$this->numberBetween(1, 12);
                continue;
            }

            if ($month !== '*' && $month < 11 && $this->generator->boolean(30)) {
                $possibilities[] = $month.'-'.$this->numberBetween($month+1, 12);
                continue;
            }

            $possibilities[] = $month;
        }

        $combined = array_unique($possibilities);
        $possibilities[] = implode(',', $this->randomElements($combined, count($combined)));

        return $this->randomElement($possibilities);
    }

    public function cronDayOfWeek($extended = true)
    {
        $possibilities = array();

        for ($i = 0; $i < 3; $i++) {
            $day = $this->randomElement(array( '*', $this->numberBetween(0, 6) ));

            if ($this->generator->boolean(30)) {
                $possibilities[] = $day.'/'.$this->numberBetween(1, 6);
                continue;
            }

            if ($day != '*' && $day < 5 && $this->generator->boolean(30)) {
                $possibilities[] = $day.'-'.$this->numberBetween($day+1, 6);
                continue;
            }

            if ($extended && $day !== '*' && $this->generator->boolean(30)) {
                $possibilities[] = $day.'L';
                continue;
            }

            if ($extended && $day != '*' && $this->generator->boolean(30)) {
                $possibilities[] = $day.'#'.$this->numberBetween(1, 5);
                continue;
            }

            $possibilities[] = $day;
        }

        $combined = array_unique($possibilities);
        $possibilities[] = implode(',', $this->randomElements($combined, count($combined)));

        return $this->randomElement($possibilities);
    }

    public function cronYear()
    {
        $possibilities = array();

        for ($i = 0; $i < 3; $i++) {
            $year = $this->randomElement(array( '*', $this->numberBetween(1970, 2099) ));

            if ($year != '*' && $this->generator->boolean(30)) {
                $possibilities[] = $year.'/'.$this->randomDigit();
                continue;
            }

            if ($year != '*' && $year < 2098 && $this->generator->boolean(30)) {
                $possibilities[] = $year.'-'.$this->numberBetween($year+1, 2099);
                continue;
            }

            $possibilities[] = $year;
        }

        return $this->randomElement($possibilities);
    }

    public function cron($extended = true)
    {
        return $this->cronMinute()
            . ' ' . $this->cronHour()
            . ' ' . $this->cronDayOfMonth($extended)
            . ' ' . $this->cronMonth()
            . ' ' . $this->cronDayOfWeek($extended)
            . ($extended ? ' ' . $this->cronYear() : '' );
    }
}
