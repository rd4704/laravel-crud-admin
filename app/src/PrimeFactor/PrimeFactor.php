<?php
namespace App\src\PrimeFactor;

use Exception;

class PrimeFactor
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
        if($number<0){
            throw new Exception('Negative', 1);
        }
        $result = $this->primeFactors($number, $this->exponentiation);

        return $result;
    }

    //Check if a number is prime
    private function isPrime($num, $pf = null)
    {
        if (!is_array($pf)) {
            for ($i = 2; $i < intval(sqrt($num)); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }

            return true;
        } else {
            $pfCount = count($pf);
            for ($i = 0; $i < $pfCount; $i++) {
                if ($num % $pf[$i] == 0) {
                    return false;
                }
            }

            return true;
        }
    }

//Find Prime Factors
    private function primeFactors($num)
    {
        //Record the base
        $base = intval($num / 2);
        $pf = [];
        $pn = null;
        for ($i = 2; $i <= $base; $i++) {
            if ($this->isPrime($i, $pn)) {
                $pn[] = $i;
                while ($num % $i == 0) {
                    $pf[] = $i;
                    $num = $num / $i;
                }
            }
        }

        return $pf;
    }
}
