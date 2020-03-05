<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 16/02/16
 * Time: 17:08
 */

namespace AEtherFramework\Exception;


class InvalidBootstrapResponse extends \Exception
{
    public function __construct($message = "", $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}