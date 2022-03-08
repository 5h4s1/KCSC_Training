<?php
require "config.php";
if (isset($_GET['id'])){
    $id = $_GET['id'];
    if (preg_match('/union/i', $id)){
        die("No hack");
    }
    $query = "SELECT * FROM products WHERE id = '$id'";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>SQLi Error Based</title>
</head>
<body>
	<table style="width:100%">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>type</th>
            <th>price</th>
		</tr>
		<?php
			$datas = $conn->query($query);
            print_r($conn -> error);	
			if (isset($datas -> num_rows) && $datas->num_rows > 0) {
				while($row = $datas->fetch_assoc()) {
					echo "<tr>".
					"<td>".$row["id"]."</td>".
					"<td>".$row["name"]."</td>".
					"<td>".$row["type"]."</td>".
					"<td>".$row["price"]."</td>".
					"</tr>";
				}
			} 
		?>
	</table> 
</body>
</html>