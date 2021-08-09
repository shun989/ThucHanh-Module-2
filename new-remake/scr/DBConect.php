<?php


class DBConect
{
    protected  $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=products";
        $this->username = "root";
        $this->password = "aM@!8972tmt";
    }

    public function connect()
    {
        try{
            return new \PDO($this->dsn,$this->username,$this->password);
        }catch (\PDOException $exception){
            echo "server dang bao tri";
            exit();
        }
    }
}