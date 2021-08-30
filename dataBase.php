<?php


class dataBase
{
    public PDO $pdo;

    public function __construct()
    {
        $this->PDO = new \PDO('mysql:host=localhost;port=3306;dbname=solomono', 'root', 'root');
        $this->PDO->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
    }
}