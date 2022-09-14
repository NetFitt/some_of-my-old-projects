<?php

include "../classes/DBH.class.php";
$id = $_POST['id'];
$post = $_POST['post'];


$sss= new DBH();
$sql="UPDATE posts SET post = ? WHERE id= ?";
$stmt= $sss->getconnect()->prepare($sql);
$stmt->execute([$post,$id]);
header("location: ../index.php?error=none");
