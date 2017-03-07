<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Input;
use App\src\PrimeFactor\PowerOfNumber;

class PrimeFactorController
{
    /**
     * @return array
     */
    public function powerOfTwo()
    {
        try {
            $number = Input::get('number', 0);
            $powerOf = new PowerOfNumber(2);
            $decomposition = $powerOf->decomposition($number);
        } catch (Exception $e) {
            return ['number' => $number, 'error' => $e->getMessage()];
        }

        return ['number' => (int)$number, 'decomposition' => $decomposition];
    }

}
