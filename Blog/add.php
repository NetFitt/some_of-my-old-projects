<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>blog</title>
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	
</head>
<body>
	
	
	<div class="text-center">
		
		<div style="height:75px;margin-bottom:60px;padding:15px" class="container-fluid bg-dark">
            <h4  class=" fs-2 text-center text-white">Add Your BLOG:</h4>
			<h5></h5>
        </div>
		<form action="includes/add.inc.php" method="post">
            <div id="blog_text" class="form-floating">
                <textarea class="form-control" rows="3" name="blog" placeholder="Write your blogs here" ></textarea>
                <label for="floatingTextarea">BLOG</label>
            </div>
			<br>
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
			<a href="../index.php"><button class="btn btn-danger btn-lg">cancel</button></a>
        </form>
	</div>
        

	

</body>
</html>