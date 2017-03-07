<?php
/**
 * Created by PhpStorm.
 * User: abidul.rmdn
 * Date: 07/03/2017
 * Time: 2:49 PM
 */

namespace Tests\Unit;

use Tests\TestCase;

class PrimeFactorControllerTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPowerOF()
    {
        $response = $this->get('/primeFactors?number=16');

        $response->assertJson(['number' => 16, 'decomposition' => [2,2,2,2]]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPowerOFWithString()
    {
        $response = $this->get('/primeFactors?number=string');

        $response->assertJson(['number' => 'string', 'error' => 'not a number']);
    }
}
