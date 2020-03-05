<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 20/01/16
 * Time: 07:05
 */

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
    public function setPath($path);

    /**
     * @param $path
     * @return RouteInterface
     */
    public function setVerb($verb);

    /**
     * @param $path
     * @return RouteInterface
     */
    public function setController($controller);

    /**
     * @param $path
     * @return RouteInterface
     */
    public function addParameters(Parameter $parameter);

    public function match(RequestInterface $request);
}
