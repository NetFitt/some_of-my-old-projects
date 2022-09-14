<?php
//
if(isset( $_POST['submit'])){

    $blog = $_POST['blog'];

    
// for process 

        include "../classes/DBH.class.php";
        include "../classes/add.class.php";
        include "../classes/add-contr.class.php";
        
// objects 

        $add = new add_contr($blog);
        $add->set_blog();

        header("location: ../index.php?error=none");

}

header("location: ../index.php?error=erorr");







