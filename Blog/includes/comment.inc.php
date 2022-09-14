<?php
//
if(isset( $_POST['submit'])){
       
    $id=$_POST['id'];
    $comment = $_POST['comment'];
    $author = $_POST['author'];

    
// for process 

        include "../classes/DBH.class.php";
        include "../classes/comment.class.php";
        include "../classes/comment-contr.class.php";
        
// objects 

        $add_comm = new comment_contr($id ,$comment, $author);
         

      
        $arr['result'] = $add_comm->set_comment();
        echo json_encode($arr);
        

}
