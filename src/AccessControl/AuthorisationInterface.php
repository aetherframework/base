<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 20/01/16
 * Time: 07:19
 */

namespace AetherFramework\AccessControl;


interface AuthorisationInterface
{
    /**
     * Returns true if the provided user meets the authentication requirements
     * @param UserInterface $user
     * @return boolean
     */
    public function isUserAllowed(UserInterface $user);
}