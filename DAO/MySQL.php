<?php

class MySQL extends PDO
{
    public $dsn = 'mysql:host=localhost:3306;dbname=db_copa';
    public $user = 'root';
    public $pass = '@MySQL_GaMaDEV_2005';

    public function __construct()
    {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}