<?php
require "config.php";
if (isset($_GET['name']) && isset($_GET['type'])){
    $type = $_GET['type'];
    $name = $_GET['name'];
    if (preg_match('/\"|\|\'/',$type)){
        die("Dau vao khong hop le");
    }
    if (preg_match('/\"|\|\'/', $name)){
        die("No hack");
    }
    $query = "SELECT * FROM products WHERE name='$name' AND type='$type'";
    // echo $query;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SQLi Union Based</title>
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
			if ($datas->num_rows > 0) {
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