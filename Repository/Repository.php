<?php

class Repository
{
    protected $connection;

    public function __construct(PDO $dbConnection)
    {
        $this->connection = $dbConnection;
    }
}