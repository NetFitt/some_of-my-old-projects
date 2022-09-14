<?php

class comment extends DBH{

    protected function add_comment($id , $comment , $author){
        $stmt = $this->connect()->prepare('INSERT INTO comments (post_id , author , comment , date_comment) VALUES (?,?,?,?);' );
        $date= date("y-m-d ");
        if(!$stmt->execute([$id , $author , $comment , $date])){
            $stmt =null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }else{
            return [ $author,$comment,$date ];
        }
        
       
    }

}