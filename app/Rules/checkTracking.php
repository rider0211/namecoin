<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Country\iata_prefix;

class checkTracking implements Rule
{
    private $transportation;
    private $iata;
    protected $message = 'The :attribute is invalid.';

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($transportation, $iata)
    {
        $this->transportation = $transportation;
        $this->iata = $iata;
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
        if($this->transportation == "01"){
            $this->message = "Airway bill number is invalid.";
            $iata_prefix = iata_prefix::where("iata", "=", $this->iata)->first();
            if($iata_prefix){
                $prefix = substr($value, 0, 3);
                if($prefix == $iata_prefix->prefix){
                    $serial = substr($value,3, 7);
                    $check_digit = substr($value, -1);
                    $check = intval($serial) % 7;
                    if($check == intval($check_digit)){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
