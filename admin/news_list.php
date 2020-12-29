<?php  
$db = mysqli_connect("localhost", "root", "", "store");
$sql = "SELECT * FROM products";
$result = mysqli_query($db, $sql);				
?>


<table style="background-color: white;" border="1">
	<tr>
		<td>id</td>
		<td>title</td>
		<td>update</td>
		<td>delete</td>
	</tr>

	<?php  
	while( $r = mysqli_fetch_assoc($result) ){
	?>
		<tr>
			<td><?php echo $r['id']; ?></td>
			<td><?php echo $r['title']; ?></td>
			<td>
				<a style="text-decoration: none; color:blue" href="update.php?id=<?php echo $r['id']; ?>">
					update
				</a>
			</td>
			<td>
				<a style="text-decoration: none; color:blue" href="action.php?action=delete&id=<?php echo $r['id']; ?>">
					delete
				</a>
			</td>
		</tr>
	<?php
	}
	?>
</table>