<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 20/01/16
 * Time: 07:20
 */

namespace AEther\AccessControl;


interface GroupInterface
{
    /**
     * Returns the group's identifier
     * @return mixed
     */
    public function getGroupIdentifier();
}