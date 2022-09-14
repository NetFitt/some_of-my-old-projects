<?php
include "classes/show-contr.class.php"
?>

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
<body class="class" id="all">

	<header>
		
			<ul class="container">
				<li><a href="add.php"> Add Posts</a></li>
				<li><a href="index.php">Home Page</a></li>
			</ul>
		
	
	</header>
	<main>
	<table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col-4">posts</th>
            <th scope="col">date_post</th>
			<th scope="col">EDITE</th>
			
            </tr>
        </thead>
        <tbody id="tables">
            <?php
				$show = new show_contr;
				$show ->get_info();
			?>
         </tbody>
    </table>
	</main>
	
	<script>
		
		
	
		$(document).on("click",".btns",(e)=>{
			e.preventDefault();
			let id = e.target.id;
			let submit = $('#'+id).val();
			let comment = $('.text_'+id).val();
			let author = $('.in_'+ id).val();
			console.log(submit);
			
			$.ajax({
				url:"includes/comment.inc.php",
				method:"Post",
				data:{
					id:id,
					submit:submit,
					comment:comment,
					author:author,
				},success:(data, status)=>{
					let res = $.parseJSON(data);
					console.log(data)
					if(!res.result[0]== false){
						$("#for_com"+id).append("<br><h4>"+ res.result[0]+" date:"+res.result[2]+"</h4><p>"+ res.result[1]+"</p><br>");
					}
					
				}
			})
		})
	</script>
</body>
</html>