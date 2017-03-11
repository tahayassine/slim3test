<?php

class Database{

    private $DB_NAME;
    private $DB_LOGIN;
    private $DB_PASSEWORD;
    private $DB_HOST;
    private $DB_PDO = false;


    public function __construct($database_name, $login = 'root', $password = '', $host = 'localhost'){
        $this->DB_HOST = $host;
        $this->DB_NAME = $database_name;
        $this->DB_PASSEWORD = $password;
        $this->DB_LOGIN = $login;
        $this->getPDO();
    }

    private function getPDO(){
        if (!$this->DB_PDO) {
            $this->DB_PDO = new PDO("mysql:dbname=$this->DB_NAME;host=$this->DB_HOST",
                $this->DB_LOGIN,
                $this->DB_PASSEWORD);
            $this->DB_PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->DB_PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        return $this->DB_PDO;
    }

    public function query($query, $params = false){
        if ($params){
            $req = $this->getPdo()->prepare($query);
            $req->execute($params);
        }else{
            $req = $this->getPDO()->query($query)->fetchAll();
        }
        return $req;
    }
}