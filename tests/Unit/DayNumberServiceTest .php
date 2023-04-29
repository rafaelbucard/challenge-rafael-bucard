<?php

namespace Tests\Unit;

use App\Services\DayNumberService;
use PHPUnit\Framework\TestCase;

class DayNumberServiceTest  extends TestCase
{
    public function testSuccess()
    {
        $date = '2022-04-30';
        $dayNumberService = new DayNumberService($date);
        $dayNumberService->execute();

        $this->assertEquals(120, $dayNumberService->dayNumber);
        $this->assertEquals('2022', $dayNumberService->year);
        $this->assertEquals('Given date is the 120th day of the year in 2022', $dayNumberService->response);
    }

    public function testLowerDate()
    {
        $date = '1899-12-31';
        $dayNumberService = new DayNumberService($date);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Date must be between 1900-01-01 and 2022-12-31.');

        $dayNumberService->execute();
    }

    public function testGreaterDate()
    {
        $date = '2023-01-01';
        $dayNumberService = new DayNumberService($date);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Date must be between 1900-01-01 and 2022-12-31.');

        $dayNumberService->execute();
    }
}
