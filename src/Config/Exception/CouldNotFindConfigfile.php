<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 20/01/16
 * Time: 17:01
 */

namespace AEtherFramework\Config\Exception;

class CouldNotFindConfigfile extends \Exception
{
    public function __construct($message = "", $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}