<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 20.04.2019
 * Time: 18:36
 */

namespace NtSchool;


use Monolog\Logger;

class Monolog implements LoggerInterface
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function error(){
        $this->logger->error('This is the error log message');
    }

    public function warning(){
        $this->logger->warning('This is the warning log message');
    }
}