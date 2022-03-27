<?php

class  Dbh {

    // SET PRIVATE PROPERTIES     
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "oop_db";


    // For Procedural PHP
    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "oop_db";

    }

}
