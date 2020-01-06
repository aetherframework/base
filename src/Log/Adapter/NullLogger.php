<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 20/01/16
 * Time: 17:17
 */

namespace AEtherFramework\Log\Adapter;


use AEtherFramework\Log\LoggerInterface;

class NullLogger implements LoggerInterface
{
    public function log($logLevel, $logMessage, array $context = [])
    {
        // Do nothing and continue
    }

    public function logDebug($logMessage, array $context = [])
    {
        // Do nothing and continue
    }

    public function logInfo($logMessage, array $context = [])
    {
        // Do nothing and continue
    }

    public function logNotice($logMessage, array $context = [])
    {
        // Do nothing and continue
    }

    public function logWarning($logMessage, array $context = [])
    {
        // Do nothing and continue
    }

    public function logError($logMessage, array $context = [])
    {
        // Do nothing and continue
    }

    public function logCritical($logMessage, array $context = [])
    {
        // Do nothing and continue
    }

    public function logAlert($logMessage, array $context = [])
    {
        // Do nothing and continue
    }

    public function logAlertEmergency($logMessage, array $context = [])
    {
        // Do nothing and continue
    }

}