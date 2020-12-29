<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: black
		}
		p{
			color:white;
			text-align: center;
			font-family: arial;
			font-size: 30px
		}
	</style>
</head>
<body>
	
</body>
</html>
<?php  
if( isset($_POST['add']) ){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	$link = mysqli_connect('localhost', 'root', '', 'store');
	$sql = "INSERT INTO `products`(`title`, `description`, `price`, `image`) VALUES ('$title', '$description', '$price', '$image')";

	$res = mysqli_query($link, $sql);
	mysqli_close($link);

	echo "<p>Ապրանքը ավելացված է կամ տեղի է ունեցել Սխալմունք</p>";
}
	
	
if( isset($_POST["update"]) ){

	$id = $_POST['id'];
	$title = $_POST["title"];
	$description = $_POST["description"];
	$price = $_POST['price'];
	$image = $_POST["image"];	

	$db = mysqli_connect("localhost", "root", "", "store");

	$sql = "UPDATE `products` SET `title`='$title',`description`='$description',`price`='$price',`image`='$image' WHERE `id`='$id'";

	$r = mysqli_query($db, $sql);

	if($r){
		echo "<p><img src='https://images.vexels.com/media/users/3/157931/isolated/preview/604a0cadf94914c7ee6c6e552e9b4487-curved-check-mark-circle-icon-by-vexels.png'></p>";
		echo "<p>Փոփոխությունը Կատարված է </p>";
	}
	else{
		echo "<p><img src='https://lh3.googleusercontent.com/proxy/YQ2MfwrtmDq1Zjr7vb8klZGztBYl1anAIMgq595RCB4-x8m2iG1HBCKzuL-tPZVMCR2v68BFt4YvOSdgK-Hxr3g82zNSXtQDDqHaZThDUiCR286zYKJLkIX5yl8rtxGTTAgU2Mbch-c'></p>";
		echo "<p> Սխալմունք է տեղի ունեցել </p>";
	}
}


if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "", "store");
	$sql = "DELETE FROM products WHERE `id` = '$id'";
	
	$r = mysqli_query($db, $sql);

	if($r){
		echo "<p><img src='https://images.vexels.com/media/users/3/157931/isolated/preview/604a0cadf94914c7ee6c6e552e9b4487-curved-check-mark-circle-icon-by-vexels.png'></p>";
		echo "<p> Ապրանքը այլևս գոյություն չունի </p>";
	}
	else{
		echo "<p><img src='https://lh3.googleusercontent.com/proxy/YQ2MfwrtmDq1Zjr7vb8klZGztBYl1anAIMgq595RCB4-x8m2iG1HBCKzuL-tPZVMCR2v68BFt4YvOSdgK-Hxr3g82zNSXtQDDqHaZThDUiCR286zYKJLkIX5yl8rtxGTTAgU2Mbch-c'></p>";
		echo "<p> Սխալմունք է տեղի ունեցել </p>";
	}
}


?>
