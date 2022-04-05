<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Country\port_code;
use App\Models\Country\state;

class usPortCode implements Rule
{
    private $state_name;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($state_name)
    {
        $this->state_name = $state_name;
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
        $state = state::where("iso2", "=", $this->state_name)
            ->where("country_code", "=", "US")
            ->first();
        if($state){
            $port_code = port_code::where("port_code", "=", $value)
                ->where("port_state", "=", $state->name)
                ->first();
            if($port_code){
                return true;
            }else{
                return false;
            }
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
        return 'The :attribute is invalid. Check available value at U.S. port code API';
    }
}
