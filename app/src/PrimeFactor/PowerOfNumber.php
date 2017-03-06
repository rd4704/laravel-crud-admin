<?php
namespace App\src\PrimeFactor;

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
     */
    public function decomposition($number)
    {
        $logOfPower = (int)log($number, $this->exponentiation);
        $result = [];
        for ($i = 0; $i < $logOfPower; $i++) {
            $result[] = $this->exponentiation;
        }

        return $result;
    }
}
