<?php

namespace Vurpa\MobileRule\Rules;

use Illuminate\Contracts\Validation\Rule;

class Mobile implements Rule
{
    private string $locale;

    public function __construct(?string $locale)
    {
        $this->locale = $locale ?? 'sv-SE';
    }

    private array $patterns = [
        'sv-SE' => '/^(\+?46|0)[\s\-]?7[\s\-]?[02369]([\s\-]?\d){7}$/',
    ];

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pattern = $this->patterns[$this->locale];

        return preg_match($pattern, $value) === 1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid mobile number';
    }
}
