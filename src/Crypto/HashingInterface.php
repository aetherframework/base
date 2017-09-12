<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 19/01/16
 * Time: 17:16
 */

namespace AEther\Crypto;


interface HashingInterface
{
    public function hashString($stringToHash, array $configOptions = []);
}