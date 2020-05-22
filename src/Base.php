<?php
namespace AEtherFramework;

use AEtherFramework\Controller\ControllerInterface;
use AEtherFramework\Exception\InvalidBootstrapResponse;
use AEtherFramework\Http\ResponseCodes;

class Base
{
    public function bootstrap(callable $boostrapFunction) {
        $controller = $boostrapFunction();
        if(!$controller instanceof ControllerInterface) {
            throw new InvalidBootstrapResponse('Result from boostrap function was not a Controller');
        }
        $controller->preDispatch();
        $controller->dispatch();
        $controller->postDispatch();
        $response = $controller->getResponse();
        foreach($response->getHeaders() as $header=>$value) {
            header($header. ': ' . $value);
        }
        http_response_code($response->getCode());
        echo $response->getBody();
    }
}