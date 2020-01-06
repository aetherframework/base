<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 19/01/16
 * Time: 17:11
 */

namespace AEtherFramework\AccessControl;


interface UserStorageInterface
{
    /**
     * @param mixed $userIdentity
     * @return UserInterface
     */
    public function getUserByIdentity($userIdentity);
}