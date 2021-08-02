<?php 
	require_once('db_connection.php');
	if(isset($_GET['submit'])){
		$Name = $_GET['name']; 
		$Quantity = $_GET['quantity'];
		$Price = $_GET['price'];
		$Description = $_GET['description'];
		
		$Sql = "INSERT INTO produk(Nama,Quantity,Price,Description) VALUES('$Name','$Quantity','$Price','$Description')";
		
		if($stmt =mysqli_query($link, $Sql)){
			/*mysqli_stmt_bind_param($stmt, "siis", $param_Name, $param_Quantity, $param_Price, $param_Description);
            $param_Name = $Name;
            $param_Quantity = $Quantity;
			$param_Price = $Price;
            $param_Description = $Description;
            if(mysqli_stmt_execute($stmt)){
				echo "Berhasil";
            }*/
			echo "Berhasil submit";
		}
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Product</title>
		<style>
		
		.container{
		width: 100%;
		margin: 0 auto;
		}
		
		label{
		color: #53bd84;
		text-shadow: 0 1px 0 #fff;
		font-size: 14px;
		font-weight: bold;
		justify-content: center;
		}
		
		input[type=submit]{
		font-size: 16px;
		background: linear-gradient(#53bd84 5%, #fff 100%);
		color: #4E4D4B;
		font-weight: bold;
		cursor: pointer;
		width: 25%;
		padding: 10px 0;
		outline:none;
		}
		
		
		
		</style>
    </head>
    <body>
		<div class="container">
		
		<form method="get" action="add_get.php">
			<label for="name">Name:</label><br>
			<input type="text" id="name" name="name" value="Product"><br><br>
			<label for="quantity">Quantity:</label><br>
			<input type="text" id="quantity" name="quantity" value="Quantity"><br><br>
			<label for="price">Price:</label><br>
			<input type="text" id="price" name="price" value="Price"><br><br>
			<label for="description">Description:</label><br>
			<input type="text" id="description" name="description" value="Desc"><br><br><br>
			<input type="submit" value="Submit" name="submit">
		</form>
		
		</div>
		
	</body>
	
</html>