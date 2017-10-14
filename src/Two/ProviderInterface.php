<?php

namespace Hyhc\Socialite\Two;

interface ProviderInterface
{
    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect();

    /**
     * Get the User instance for the authenticated user.
     *
     * @return \Hyhc\Socialite\Two\User
     */
    public function user();


    public function useThisConfig($configure);

}
