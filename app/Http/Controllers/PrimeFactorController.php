<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\src\PrimeFactor\PowerOfNumber;

class PrimeFactorController
{
    /**
     * @return array
     */
    public function powerOfTwo()
    {
        $number = Input::get('number', 0);
        $powerOf = new PowerOfNumber(2);
        $decomposition = $powerOf->decomposition($number);
        $result = ['number' => (int)$number, 'decomposition' => $decomposition];

        return $result;
    }

}
