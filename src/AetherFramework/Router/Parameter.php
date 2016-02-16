<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 09/12/15
 * Time: 07:28
 */

namespace AetherFramework\Router;

/**
 * Class Parameter
 * Represents the parts of a path which contain data for the controller
 * Eg. In a path of entry/id/7319 the 3719 is a parameter called id
 * @package AetherFramework\Router
 */
class Parameter
{
    protected $name;
    /**
     * @var bool
     */
    protected $required;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Parameter
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return Parameter
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }
}