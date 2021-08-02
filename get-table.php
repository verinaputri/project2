<?php
	include_once 'db_connection.php';
	$result = mysqli_query($link,"SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
	<head> 
	<title> Retrive data</title> 
	<style>
	
	body{
	background-color: #f7faf9;

	}
	
	.container{
	width: 80%;
	margin: 0 auto;
	}
	
	h2{
	background-color: #f28d8d;
	padding: 30px 30px;
	margin: -10px -50px;
	text-align: center;
	color: #fff;
	}
	
	hr{
	margin: 10px -50px;
	border: 0;
	border-top: 1px solid #ccc;
	margin-bottom: 25px;
	}
	
	div.main{
	width: 80%;
	padding: 10px 50px 30px;
	border: 2px solid gray;
	font-family: raleway;
	float: left;
	margin-top: 15px;
	}
		
	table {
	margin: 0px;
	font-family: arial, sans-serif;
	border-collapse: collapse;
    width: 100%;
	}

	td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
	}

	tr:nth-child(even) {
    background-color: white;
	}
	</style>
	</head>
	
	<body>
		<div class="container">
			<div class="main">
						
		<?php
		if (mysqli_num_rows($result) > 0) {
		?>
			<h2> Tabel Produk </h2><hr/>
		<table> 
			<tr>
				<td>Name</td>
				<td>Quantity</td>
				<td>Price</td>
				<td>Description</td>
			</tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $row["nama"]; ?>
				<td><?php echo $row["quantity"]; ?></td>
				<td><?php echo $row["price"]; ?></td>
				<td><?php echo $row["description"]; ?></td>
			</tr>
			<?php
			$i++;
			}
			?>
		</table>
		<?php
		}
		else{
			echo "No result found";
		}
		?>
			</div>
		</div>
	</body>
</html>
