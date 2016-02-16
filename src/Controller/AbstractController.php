<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 03/12/15
 * Time: 17:17
 */

namespace AetherFramework\Controller;

use AetherFramework\Http\RequestInterface;
use AetherFramework\Http\ResponseInterface;

abstract class AbstractController implements ControllerInterface
{
    /**
     * @var RequestInterface
     */
    protected $request;
    /**
     * @var ResponseInterface
     */
    protected $response;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;

    }

    public function preDispatch()
    {
    }

    public function postDispatch()
    {
    }

    protected function getRequest()
    {
        return $this->request;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse(ResponseInterface $response) {
        $this->response = $response;
    }


}