<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 19/01/16
 * Time: 17:07
 */

namespace AEther\AccessControl;

interface UserInterface
{
    /**
     * Returns the data used to identify the user
     * @return mixed
     */
    public function getUserIdentifier();


    /**
     * Returns the hashed user credentials
     * @return mixed
     */
    public function getUserCredentials();

    /**
     * Returns all the groups of which a user is a member
     * @return GroupInterface[]
     */
    public function getUserGroups();
}