<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EmailOrPhone implements Rule
{
    protected $message = "";

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (is_numeric($value)) {
            return strlen($value) == 10;
        } else {
            return isEmail($value);
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid Phone/Email format.';
    }
}
