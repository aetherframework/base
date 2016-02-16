<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 20/01/16
 * Time: 07:05
 */

namespace AetherFramework\Router;


use AetherFramework\Http\RequestInterface;

interface RouteInterface
{
    const HTTP_VERB_GET = 'GET';
    const HTTP_VERB_PUT = 'PUT';
    const HTTP_VERB_POST = 'POST';
    const HTTP_VERB_DELETE = 'DELETE';

    public function getPath();

    public function setPath($path);

    public function getVerb();

    public function setVerb($httpVerb);

    public function getController();

    public function setController($controller);

    public function addParameter(Parameter $parameter);

    public function getParameterList();

    public function match($path, $httpVerb);

    public function getParameters(RequestInterface $request);

}