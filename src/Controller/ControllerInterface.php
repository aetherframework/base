<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 03/12/15
 * Time: 17:17
 */

namespace AetherFramework\Controller;


use AetherFramework\Http\ResponseInterface;

interface ControllerInterface
{
    /**
     * Things to do before dispatch
     * @return void
     */
    public function preDispatch();

    /**
     * Run the controller's action
     *
     * @return ResponseInterface
     */
    public function dispatch();

    /**
     * Things to do after dispatch
     * @return void
     */
    public function postDispatch();

    /**
     * @return ResponseInterface
     */
    public function getResponse();
}