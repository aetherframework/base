<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 30/11/15
 * Time: 18:15
 */

namespace AetherFramework\Injector;


interface InjectorInterface
{
    public function define($name, array $args);

    public function defineParam($paramName, $value);

    public function alias($original, $alias);

    public function share($nameOrInstance);

    public function prepare($name, $callableOrMethodStr);

    public function delegate($name, $callableOrMethodStr);

    public function make($name, array $args = array());

    public function execute($callableOrMethodStr, array $args = array());

    public function buildExecutable($callableOrMethodStr);
}