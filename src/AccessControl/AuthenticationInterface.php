<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 19/01/16
 * Time: 17:09
 */

namespace AEther\AccessControl;


interface AuthenticationInterface
{
    /**
     * AuthenticationInterface constructor.
     * @param UserStorageInterface $userStorageInterface
     */
    public function __construct(UserStorageInterface $userStorageInterface);

    /**
     * Returns true if the use identity matches their stored credentials
     * @param UserInterface $user
     * @return boolean
     */
    public function isUserValid(UserInterface $user);
}