<?php
namespace AEtherFramework\Router;


use AEtherFramework\Http\RequestInterface;

interface RouteInterface
{
    const HTTP_VERB_GET = 'GET';
    const HTTP_VERB_PUT = 'PUT';
    const HTTP_VERB_POST = 'POST';
    const HTTP_VERB_DELETE = 'DELETE';

    public function getPath();

    public function getVerb();

    public function getController();

    public function getParameters();

    /**
     * @param $path
     * @return RouteInterface
     */
    public function setPath($path): RouteInterface;

    /**
     * @param $path
     * @return RouteInterface
     */
    public function setVerb($verb): RouteInterface;

    /**
     * @param $path
     * @return RouteInterface
     */
    public function setController($controller): RouteInterface;

    /**
     * @param $path
     * @return RouteInterface
     */
    public function addParameters(Parameter $parameter): RouteInterface;

    public function match(RequestInterface $request): bool;
}
