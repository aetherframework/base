<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 08/01/16
 * Time: 17:57
 */

namespace AetherFramework\Http;


interface ResponseInterface
{
    /**
     * Returns HTTP Status code
     * @see
     * @return int
     */
    public function getCode();

    /**
     * Returns the response body as a string
     * @return string
     */
    public function getBody();

    /**
     * Returns the response headers as an associative array
     * @return array
     */
    public function getHeaders();

    /**
     * Returns a specific header from the header array
     * @param string $header
     */
    public function getHeader($header);
}