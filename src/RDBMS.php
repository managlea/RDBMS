<?php

namespace Managlea\RDBMS;


class RDBMS implements RDBMSInterface
{
    private $orm;

    public function __construct($orm)
    {
        $this->orm = $orm;
    }

    public function getOrm()
    {
        return $this->orm;
    }
}
