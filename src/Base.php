<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 16/02/16
 * Time: 17:07
 */

namespace AetherFramework;


use AetherFramework\Controller\ControllerInterface;
use AetherFramework\Exception\InvalidBootstrapResponse;
use AetherFramework\Http\ResponseCodes;

class Base
{
    public function bootstrap(callable $boostrapFunction) {
        $controller = $boostrapFunction();
        if(!$controller instanceof ControllerInterface) {
            throw new InvalidBootstrapResponse('Result from boostrap function was not a Controller');
        }
        $controller->dispatch();
        $response = $controller->getResponse();
        foreach($response->getHeaders() as $header=>$value) {

        }
        http_response_code($response->getCode());
        echo $response->getBody();
    }
}