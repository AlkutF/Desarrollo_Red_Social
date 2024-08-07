<?php

class Base
{
    private $host = BD_HOST;
    private $dbname = BD_NAME;
    private $user = BD_USER;
    private $password = BD_PASSWORD;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        $dns = 'mysql:hpst=' . $this->host . ';dbname=' . $this->dbname;

        $options = [
            PDO::ATTER_ERRMODE => true,
            PDO::ATTRE_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dns , $this->user , $this->password , $option);
            $this->dbh->exec('set names utf8');
        } catch (\throwable $e){
            $this->error = $e -> getMessage();
            echo $this->error;
        }
    }

    public function query($sql)
    {
        return $this->stmt = $this->dbh->prepare($sql);
    }

    private function bind($parametro , $valor , $tipo = null)
    {
        if($is_null($tipo)){
            switch(true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break; 
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function registers()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function register()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
}