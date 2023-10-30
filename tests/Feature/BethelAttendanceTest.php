<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BethelAttendanceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
/**
 * @return void
 */
  
    public function testHomePage()
    {
        $response=$this->get('/bethelattendance');

        $response->assertStatus(200);
    }

    //Test if other pages load successfully
  /**
   * @return void
   */
  public function testSundayChartPage()
  {
    $response=$this->get('/bethelattendance/sundaychart');
    $response->assertStatus(200);
  }

}
