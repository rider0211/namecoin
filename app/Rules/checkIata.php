<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Country\iata;

class checkIata implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $iata = iata::where("iata", "=", $value)->first();
        if($iata){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is invalid. Check available value at Airline IATA code API';
    }
}
