
<?php
echo '<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> ';
    // grabing the data
    $eid=$_GET['eid'];

    //instantiate  class
    include "../classes/DBH.class.php";
$dd= new DBH();

$sql="SELECT * FROM posts WHERE id=?";
$stmt= $dd->getconnect()->prepare($sql);
$stmt->execute([$eid]);
$name= $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    </head>
    <div class="text-center">
        
            <div style="height:75px;margin-bottom:60px;padding:15px" class="container-fluid bg-dark">
                <h4  class=" fs-2 text-center text-white">Edite the information of  information</h4>
            </div>
    
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 style="margin-bottom:60px;" class="fs-4 text-center">Please enter the new informations</h4>
                </div>
            </div>
            
            <form action="process.inc.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $name['id'] ?> ">
                <div class="row">
                    <div class="col form-floating mb-3">
                        <input class="form-control" type="text" name="post" value="<?php echo $name['post'] ?>" >
                        <label for="post">post:</label>
                    </div>
        
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit">
                </div> 
            </form>

        </div>
    </div>