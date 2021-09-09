<?php

namespace Tests\Unit;

use App\Http\Controllers\ReccaTest as ControllersReccaTest;
use PHPUnit\Framework\TestCase;

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

    
}
