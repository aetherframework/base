<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 26/01/16
 * Time: 18:18
 */

namespace AEtherFramework\Config\Exception;


class CannotAddAdapter extends \Exception
{
    public function __construct($message = "", $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}