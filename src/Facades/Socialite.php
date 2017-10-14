<?php

namespace Hyhc\Socialite\Facades;

use Illuminate\Support\Facades\Facade;
use Hyhc\Socialite\Contracts\Factory;

/**
 * @see \Hyhc\Socialite\SocialiteManager
 */
class Socialite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
