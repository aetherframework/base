<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 30/11/15
 * Time: 18:10
 */

namespace AEtherFramework\Config\Exception;


class RequiredVariableNotSet extends \Exception
{
    public function __construct($message = "", $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}