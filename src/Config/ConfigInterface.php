<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 30/11/15
 * Time: 18:02
 */

namespace AEther\Config;


interface ConfigInterface
{
    /**
     * @param $variable
     * @param $defaultValue
     * @return mixed
     */
    public function getVariable($variable, $defaultValue);

    /**
     * @param $variable
     * @return mixed
     */
    public function getRequired($variable);
}