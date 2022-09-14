<?php

include "../classes/DBH.class.php";
$data_base=new DBH();
$did=$_GET['did'];
     

$stmt=$data_base->getconnect()->prepare("DELETE FROM posts WHERE id= $did");
$stmt_2=$data_base->getconnect()->prepare("DELETE FROM comments WHERE post_id= $did");
$stmt->execute();
$stmt_2->execute();

header("location: ../index.php?error=none");
    