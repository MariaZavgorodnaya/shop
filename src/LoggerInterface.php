<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 20.04.2019
 * Time: 18:36
 */

namespace NtSchool;


interface LoggerInterface
{
    public function error();

    public function warning();
}