<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class noSpecialChar implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(preg_match('/[0-9]/', $value)) {
            $fail('The :attribute must not contain numbers.');
        }

        if(preg_match('/[^a-zA-Z\s]/', $value)) {
            $fail('The :attribute must not contain special characters.');
        }

        $pattern = '/^[A-Z][a-z]*( [A-Z][a-z]*)*$/';
        if (!preg_match($pattern, $value)) {
            $fail('The first letter of each word in the :attribute must be capitalized.');
        }
    }
}
