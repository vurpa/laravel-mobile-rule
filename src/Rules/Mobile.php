<?php

namespace Vurpa\MobileRule\Rules;

use Illuminate\Contracts\Validation\Rule;

class Mobile implements Rule
{
    private array $patterns = [
        'sv-SE' => '/^(\+?46|0)[\s\-]?7[\s\-]?[02369]([\s\-]?\d){7}$/',
        'nb-NO' => '/^(\+?47)?[49]\d{7}$/',
    ];

    private $locale;

    /**
     * @param array|string|null $locale
     */
    public function __construct(mixed $locale)
    {
        $this->locale = $locale ?? 'sv-SE';
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
        if (is_array($this->locale)) {
            foreach ($this->locale as $locale) {
                $pattern = $this->patterns[$locale];

                if (preg_match($pattern, $value) === 1) {
                    return true;
                }
            }

            return false;
        }

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
        return 'The :attribute must be a valid mobile phone number';
    }
}
