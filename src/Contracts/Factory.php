<?php

namespace Hyhc\Socialite\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \Hyhc\Socialite\Contracts\Provider
     */
    public function driver($driver = null);
}
