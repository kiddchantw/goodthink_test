<?php

namespace Tests\Unit;

use App\Http\Controllers\ReccaTest as ControllersReccaTest;
use PHPUnit\Framework\TestCase;
// use Tests\TestCase;


class ReccaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }


    public function test_recca_q1_function()
    {
        $test_result = (new ControllersReccaTest)->q1_function(12345);
        $this->assertEquals($test_result, 54321);
    }

    
    /**
    * @dataProvider reverseData
    * @param int $input
    * @param int $expected
    */
    public function test_recca_q1_function_v2(int $input,int $expected)
    {
        $this->assertEquals($expected ,(new ControllersReccaTest)->q1_function($input));
    }

    public function reverseData():array
        {
            return [
                [123456,654321],
                [584,485],
                [0,0],
                [-123,-321],
                // [-107,-701],
            ];
        }
}
