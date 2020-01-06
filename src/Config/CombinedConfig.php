<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 09/12/15
 * Time: 17:09
 */

namespace AEtherFramework\Config;


use AEtherFramework\Config\AbstractConfig;
use AEtherFramework\Config\ConfigInterface;
use AEtherFramework\Config\Exception\CannotAddAdapter;

class CombinedConfig extends AbstractConfig implements ConfigInterface
{
    /**
     * @var ConfigInterface[]
     */
    protected $_configs;

    public function __construct()
    {
        $this->_configs = [];
        parent::__construct();
    }

    /**
     * Add a config to the stack
     * @param ConfigInterface $config
     * @param int|null $priority
     * @throws CannotAddAdapter
     * @returns CombinedConfig
     */
    public function addConfig(ConfigInterface $config, $priority = null)
    {
        $priority = is_null($priority) ? count($this->_configs) : $priority;
        if (isset($this->_configs[$priority])) {
            throw new CannotAddAdapter("A config adapter with the priority " . $priority . " was already added");
        } elseif (!is_int($priority)) {
            throw new CannotAddAdapter("Priority should be an integer");
        }
        $configs = $this->_configs;
        $configs[$priority] = $config;
        if (!krsort($configs)) {
            throw new CannotAddAdapter("Failed to sort configs by priority");
        }
        $this->_configs = $configs;
        return $this;
    }

    /**
     * @param string $variable
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getVariable($variable, $defaultValue)
    {
        $value = $defaultValue;
        foreach ($this->_configs as $config) {
            $value = $config->getVariable($variable, $defaultValue);
            if ($value !== $defaultValue) {
                break;
            }
        }
        return $value;
    }
}