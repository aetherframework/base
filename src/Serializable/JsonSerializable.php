<?php

namespace AEther\Serializable;


interface JsonSerializable extends \JsonSerializable
{
    /**
     * Returns a a value that can be encoded by json_encode()
     * @return mixed
     */
    public function jsonSerialize();

    /**
     * @param string $jsonData
     * @return $this
     */
    public static function jsonDeserialize($jsonData);
}