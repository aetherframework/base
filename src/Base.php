<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 16/02/16
 * Time: 17:07
 */

namespace AEther;


use AEther\Controller\ControllerInterface;
use AEther\Exception\InvalidBootstrapResponse;
use AEther\Http\ResponseCodes;

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