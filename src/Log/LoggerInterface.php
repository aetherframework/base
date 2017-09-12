<?php
/**
 * Created by PhpStorm.
 * User: delphicokami
 * Date: 20/01/16
 * Time: 17:13
 */

namespace AEther\Log;


interface LoggerInterface
{
    const
        LOG_LEVEL_DEBUG = 100,
        LOG_LEVEL_INFO = 200,
        LOG_LEVEL_NOTICE = 250,
        LOG_LEVEL_WARNING = 300,
        LOG_LEVEL_ERROR = 400,
        LOG_LEVEL_CRITICAL = 500,
        LOG_LEVEL_ALERT = 550,
        LOG_LEVEL_EMERGENCY = 600;

    /**
     * @param $logLevel
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function log($logLevel, $logMessage, array $context = []);

    /**
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function logDebug($logMessage, array $context = []);

    /**
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function logInfo($logMessage, array $context = []);

    /**
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function logNotice($logMessage, array $context = []);

    /**
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function logWarning($logMessage, array $context = []);

    /**
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function logError($logMessage, array $context = []);

    /**
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function logCritical($logMessage, array $context = []);

    /**
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function logAlert($logMessage, array $context = []);

    /**
     * @param $logMessage
     * @param array $context
     * @return void
     */
    public function logAlertEmergency($logMessage, array $context = []);
}