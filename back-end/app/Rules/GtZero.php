<?php

namespace App\Rules;


use Illuminate\Validation\Rule;

class GtZero extends Rule
{

    public function passes(string $attribute, mixed $value): bool
    {
        return $value > 0;
    }


    public function message(): string
    {
        return 'The :attribute must be greater than 0.';
    }
}
