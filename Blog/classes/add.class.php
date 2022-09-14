<?php

class add extends DBH{

    protected function add_blog($blog){
        $stmt = $this->connect()->prepare('INSERT INTO posts ( post , date_post ) VALUES (?,?);' );
        $date= date("y-m-d");
        if(!$stmt->execute([$blog,$date])){
            $stmt =null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
       
    }


}