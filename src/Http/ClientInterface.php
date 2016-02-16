<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 08/01/16
 * Time: 18:00
 */

namespace AetherFramework\Http;


interface ClientInterface
{
    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function send(RequestInterface $request);

    /**
     * Generates a new request object for use with this client
     * @return RequestInterface
     */
    public function getRequest();
}