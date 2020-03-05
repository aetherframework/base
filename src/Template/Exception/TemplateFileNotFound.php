<?php
/**
 * Created by PhpStorm.
 * User: aether-framework
 * Date: 18/12/15
 * Time: 18:30
 */
namespace AEtherFramework\Template\Exception;

class TemplateFileNotFound extends \Exception
{
    public function __construct($message = "", $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}