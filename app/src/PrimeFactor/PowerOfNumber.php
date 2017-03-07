<?php
namespace App\src\PrimeFactor;

use Exception;

class PowerOfNumber
{
    private $exponentiation = 0;

    /**
     * PowerOfNumber constructor.
     *
     * @param $powerOf
     */
    public function __construct($powerOf)
    {
        $this->exponentiation = $powerOf;
    }

    /**
     * @param $number
     *
     * @return array
     * @throws \Mockery\CountValidator\Exception
     */
    public function decomposition($number)
    {
        if (!is_numeric($number)) {
            throw new Exception('not a number', 1);
        }
        $logOfPower = (int)log($number, $this->exponentiation);
        $result = [];
        for ($i = 0; $i < $logOfPower; $i++) {
            $result[] = $this->exponentiation;
        }

        return $result;
    }
}
