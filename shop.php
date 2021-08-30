<?php
require 'dbModel.php';

class shop extends dbModel
{
    public function __construct()
    {
        if($this->getMethod() === 'post'){
            echo $this->select($this->getBody());
        }
    }

    public function getBody()
    {
        return $_POST;
    }

    public function select($body = '')
    {
        return parent::select($body);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}

$run = new shop();