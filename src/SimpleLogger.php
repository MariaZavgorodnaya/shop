<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 20.04.2019
 * Time: 18:48
 */

namespace NtSchool;


use Wa72\SimpleLogger\FileLogger;

class SimpleLogger implements LoggerInterface
{
    protected $logger;
    public function __construct(FileLogger $logger)
    {
        $this->logger = $logger;
    }

    public function warning()
{
    $this->info('This is an info message');
}
public function error(){
    $this->logger->error('This is an error message');

}
}