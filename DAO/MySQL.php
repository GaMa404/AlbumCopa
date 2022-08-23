<?php

namespace AlbumCopa\DAO;

use \PDO;

class MySQL extends PDO
{
    public $dsn = 'mysql:host=localhost:3307;dbname=db_copa';
    public $user = 'root';
    public $pass = 'etecjau';

    public function __construct()
    {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}