<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 20/01/16
 * Time: 17:13
 */

namespace AetherFramework\Log;


interface LoggerAwareInterface
{
    /**
     * @return LoggerInterface
     */
    public function getLogger();
}