<html>
<head>
	<style type="text/css">
		body{
		background-color: #496e49;
		}
		label{
			background-color: black;
			}
			input{
				color:white;
				background-color: #697180
			}
			input:hover{
				background-color: black;
			}
			::placeholder {
  			color: white;
  			font-size: 16px
			}
			h1{
				background-color: white;
				color:black;
				font-size: 25px;
			}

	</style>
	<title>Admin page</title>
</head>
<body>
	<div style="color:white;font-weight: bold;background-color:red" class="hhh">
			ADMINISTRATION
		</div>	
	<h1>Ավելացրեք ապրանք</h1>
	<form action="action.php" method="post">
		<input style="background-color: #697180; color:white" type="text" name="title" placeholder="Վերնագիր"> <br><br>
		<input style="background-color: #697180; color:white" type="number" name="price" placeholder="Գին"> <br><br>
		<textarea style="background-color: #697180; color:white" name="image" placeholder="Նկար" rows="3" cols="60"></textarea> <br><br>
		<textarea style="background-color: #697180; color:white" name="description" placeholder="Բովանդակություն" rows="5" cols="60"></textarea> <br><br>
		<input type="submit" name="add" value="Ուղարկել">
	</form>

	<?php include('news_list.php') ?>
</body>
</html>