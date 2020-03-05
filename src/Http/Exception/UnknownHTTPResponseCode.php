<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 27/01/16
 * Time: 07:16
 */

namespace Http\Exception;


class UnknownHTTPResponseCode extends \Exception
{
    public function __construct($message = "", $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}