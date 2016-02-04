<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 07/12/15
 * Time: 18:57
 */

namespace AetherFramework\Http;


interface RequestInterface
{
    const METHOD_POST = 'POST';
    const METHOD_GET = 'GET';
    const METHOD_PUT = 'PUT';
    const METHOD_PATCH = 'PATCH';
    
    /**
     * Returns the query parameters as a key value pair array
     * @return array
     */
    public function getQuery();

    /**
     * Returns the body of the request as a key value pair array
     * @return array
     */
    public function getBody();

    /**
     * Returns the request headers as a key value pair array
     * @return array
     */
    public function getHeaders();

    /**
     * Returns the query parameter denoted by the supplied key
     *
     * Default value is returned if key is not present
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getQueryValue($key, $default = null);

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getBodyValue($key, $default = null);

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getHeaderValue($key, $default = null);

    /**
     * @return string
     */
    public function getPath();

    /**
     * @return string
     */
    public function getHost();

    /**
     * @return boolean
     */
    public function isHttps();

    /**
     * @return string
     */
    public function getMethod();

    /**
     * Builds and returns the full url including the protocol and query parameters
     * @return string
     */
    public function getFullyQualifiedUri();
}