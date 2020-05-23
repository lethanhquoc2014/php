<?php

class MyCalendar {
    public $free = array();
    public $booked = array();

    public function __construct($week = 'now')
    {
        $start = new DateTime($week);
        $start->modify('Monday this week midnight');
        $end = clone $start;
        $end->modify('Friday this week midnight');
        $interval = new DateInterval('P1D');
        foreach (new DatePeriod($start, $interval, $end) as $freeTime) {
            $this->free[] = $freeTime;
        }
    }

    public function bookAppointment(DateTime $date, $note)
    {
        $this->booked[] = array('date' => $date->modify('midnight'), 'note' => $note);
    }

    public function checkAvailability()
    {
        return array_udiff($this->free, $this->booked, array($this, 'customCompare'));
    }
    
    public function customCompare($free, $booked)
    {
        if (is_array($free)) {
            $a = $free['date'];
        } else {
            $a = $free;
        }

        if (is_array($booked)) {
            $b = $booked['date'];
        } else {
            $b = $booked;
        }

        if ($a == $b) {
            return 0;
        }
        return $a > $b ? 1 : -1;
    }
}

// Create a calendar for weekly appointments
$myCalendar = new MyCalendar;

// Book some appointments for this week
$myCalendar->bookAppointment(new DateTime('Monday this week'), "Cleaning GoogleGuy's apartment.");
$myCalendar->bookAppointment(new DateTime('Wednesday this week'), "Going on a snowboarding trip.");
$myCalendar->bookAppointment(new DateTime('Friday this week'), "Fixing buggy code.");

// Check availability of days by comparing $booked dates against $free dates
echo "I'm available on the following days this week...\n\n";
foreach ($myCalendar->checkAvailability() as $free) {
    echo $free->format('l'), "\n"; 
}
echo "\n\n";
echo "I'm busy on the following days this week...\n\n";
foreach ($myCalendar->booked as $booked) {
    echo $booked['date']->format('l'), ": ", $booked['note'], "\n"; 
}