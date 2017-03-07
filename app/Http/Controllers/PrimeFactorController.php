<?php

namespace App\Http\Controllers;

use App\src\PrimeFactor\PrimeFactor;
use Exception;
use Illuminate\Support\Facades\Input;

class PrimeFactorController
{
    /**
     * @return array
     */
    public function powerOfTwo()
    {
        try {
            $number = Input::get('number', 0);
            $powerOf = new PrimeFactor(2);
            $decomposition = $powerOf->decomposition($number);
        } catch (Exception $e) {
            return ['number' => $number, 'error' => $e->getMessage()];
        }

        return ['number' => (int)$number, 'decomposition' => $decomposition];
    }

}
