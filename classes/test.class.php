<?php

class Test extends Dbh {

    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['id'] . "<br>";
            echo $row['name'] . "<br>";
        }
    }

    public function getUsersStmt( $name ){
        $sql = "SELECT * FROM users WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute( [$name] );
        $names = $stmt->fetchAll();

        foreach ($names as $name ) {
            echo $name['id'] . "<br>";
            echo $name['name'] . "<br>";
        }

    }

    public function setUsersStmt( $name ){
        $sql = "INSERT INTO users(name) VALUES (?) ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute( [$name] );
    }


}