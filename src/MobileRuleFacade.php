<?php

namespace Vurpa\MobileRule;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vurpa\MobileRule\MobileRule
 */
class MobileRuleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-mobile-rule';
    }
}
