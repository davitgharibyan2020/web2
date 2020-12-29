<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "store");
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
			background-color: #496e49;
		}
		label{
			background-color: white;
	
		}
			input{
				color:white;
				background-color: #697180
			}
			::placeholder {
  color: white;
  font-size: 16px
}
	</style>
</head>
<body>
	<div class="main">
		<div style="color:white;font-weight: bold;background-color:red" class="header">
			ADMINISTRATION
		</div>		
		<div class="container">	
			<h1 style="background-color: white;font-size: 26px">Փոփոխեք տվյալները</h1>		

			<form style="color:black ;" action="action.php" method="post" enctype="multipart/form-data">
				<label for="title">Վերնագիր</label><br><br>
				<input placeholder="Վերնագիր" type="text" name="title" id="title" value="<?php echo $r['title']; ?>"> <br><br>

				<label for="image">Նկար</label><br><br>
				<textarea placeholder="Նկար" style="background-color: #697180; color:white" name="image" id="image" rows="6" cols="46" > <?php echo $r['image']; ?></textarea><br><br>

				<label for="description">Բովանդակություն</label><br><br>
				<textarea placeholder="Բովանդակություն" style="background-color: #697180; color: white;" name="description" id="description" rows="10" cols="46"><?php echo $r['description']; ?></textarea><br><br>

				<label for="price">Գին</label><br><br>
				<textarea placeholder="Գին" style="background-color: #697180; color: white;" name="price" id="price" rows="6" cols="46" > <?php echo $r['price']; ?></textarea><br><br>			
<hr>
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<input type="submit" name="update" value="Ուղարկել">
			</form>			
		</div>
	</div>
</body>
</html>