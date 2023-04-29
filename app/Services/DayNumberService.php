<?php

namespace App\Services;

use Carbon\Carbon;

/**
 *Checks the date by returning the day of the year and the year
 * 
 */
class DayNumberService
{
    /**
     * Date String 
     * ex: Y-m-d
     */
    private string $date;

    /**
     * Day number
     * Ex: 120
     */
    public int $dayNumber;

    /**
     * Year
     * ex: 2020
     */
    public string $year;

    /**
     * Response Mensage
     * ex: Given date is the 9th day of the year in 2019.
     */
    public string $response;


    public function __construct($date)
    {
        $this->date = $date;
    }
    
    /**
     * execute
     *
     * @return DayNumberService|Exception
     */
    public function execute()
    {
        $start = Carbon::createFromDate(1900, 1, 1);
        $end = Carbon::createFromDate(2022, 12, 31);

       
            $date = Carbon::parse($this->date);
            if ($date->between($start, $end)) {
                $this->year = $date->year;
                $this->dayNumber = $date->dayOfYear;
                $this->response = 'Given date is the '.$date->dayOfYear.'th day of the year in '.$date->year;
                return $this;
            } else {
                throw new \Exception('Date must be between 1900-01-01 and 2022-12-31.');
            }
    }
}