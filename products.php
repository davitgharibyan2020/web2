<?php  
$db = mysqli_connect("localhost", "root", "", "store");
$sql = "SELECT * FROM products";
$result = mysqli_query($db, $sql);				
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.info > p {
			color:white;
			font-weight: bold;
			font-family: calibri;
			border: 1px solid black;
			background-color:red;
			font-size: 23px
		}
		#p{
			color:white;
			font-weight: bold;
			border:none;
			background-color: #496e49;
			font-size: 30px
		}
		a{
			text-decoration: none;;
		}
	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Home Page</title>
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

<div class="products">

<div class="info">
	<h2 style="font-size: 30px;font-weight: bold;font-family: calibri;color:white">Facts About Samsung</h2>
	<p>1.Samsung has been around since 1938.</p>
	<p>2.Samsung's construction division built the Burj Khalifa, which is the tallest building in the world.</p>
	<p>3.Samsung's Heavy Industries builds ships in a 4 million square foot shipyard.</p>
	<p>4Samsung Electronics has 370,000 employees worldwide.</p>
	<a href="facts.php"><p id="p">Click And Read More...</p></a>
</div>
<div class="cardd" style="display:flex;flex-wrap: wrap;padding: 60px;margin:10px"><br>
<?php while ( $r = mysqli_fetch_assoc($result) ) { ?>
<br><div class="card" style="background-color: white">
  <br><img src="<?php echo $r['image'];?>" alt="" style="width: 300px; height: 250px">
  <h1><?php echo $r['title'];?></h1>
  <a href="single.php?id=<?php echo $r['id']; ?>"><p><button>Add to Cart</button></p></a>
</div>
 <?php					}?>
</div>


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