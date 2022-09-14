<?php

class DBH {
    private $host = "localhost";
    private $user = "mohamed";
    private $pwd = "123";
    private $dbn = "blog";

    protected function connect(){
        //for connecting to database
        try{
            $dsn = 'mysql:host='.$this->host. ';dbname='.$this->dbn;
            $pdo = new PDO($dsn ,$this->user, $this->pwd );
            return $pdo;
        }catch (PDOException $e){
            echo "connection ERROR !".$e->getMessage()."<br/>";
        }
    }
    public function getconnect(){
        return $this->connect();

    }

   
    

}