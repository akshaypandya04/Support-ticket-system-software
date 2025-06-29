<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordValidation implements Rule
{
    const MESSAGE = "Your password must be between 8 to 30 characters and must contain at least one upper case letter, at least one digit and at least one special character, with the exception of the characters < and &, which cannot be used.";

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[!"#$%\'()*+,-.:;=>?@^_`{|}~]).+$/', $value) && strlen($value) >= 8 && strlen($value) <=30 && !preg_match('/([<&]+)/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return self::MESSAGE;
    }

    /**
     * Function to validate the password regex
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @param $validator
     * @return bool
     */
    public function validate($attribute, $value, $parameters, $validator)
    {
        return $this->passes($attribute, $value);
    }
}
