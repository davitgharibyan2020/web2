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
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Home Page</title>
	<style type="text/css">
		button:hover{
			background-color: red;
		}
	</style>
</head>
<body>
	<div class="main">
	<div class="header" >	
	<ul id="menu" >
		<li> <a href="index.php">Home</a></li>
			<li><a href="products.php">Products</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="facts.php">Facts</a></li>

	</ul>
	<br>
	</div>
	<img id="cover" src="https://geekbeard.tv/wp-content/uploads/2017/03/Samsung_logo-2.jpg">
	<hr>	
</div>

<div  class="div">
		<h1 style="background-color: black;color:red"><?php echo $r['title'];?></h1>
		<img  class="img" style="height: 300px;width: 300px;" src="<?php echo $r['image'];?>">
		<h3><?php echo $r['price'];?> $</h3>
			<h2 style="background-color: black;color:white" class="select">Color
<select style="margin-left: 265px">
    <option value="1">Red</option>
    <option value="2">Black</option>
    <option value="3">White</option>

    
  </select>
</h2>
<p style="background-color: black;color:white" ><?php echo $r['description'];?></p>
<a style="text-decoration: none" href="#"><button style="font-size: 30px">Buy</button><br></a>
	</div>
<br>
<div class="footer">
	<ul id="menu" >
		<li> <a href="index.php">Home</a></li>
			<li><a href="products.php">Products</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="facts.php">Facts</a></li>
	</ul>
</div>
</body>
</html>