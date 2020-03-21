<!doctype html>
<html>
<head>
<script src="index.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<title>CONTACT APPLICATION</title>
</head>
<body>
<div>
	<div id="header"><h1 align="center">CONTACT APPLICATION</h1></div>
	<div id="main-wrapper">
		<div id="main">
			<div id="login">
				<center>
				<h2>EDIT CONTACT</h2>
				<?php
				include "db.php";
				$id=$_GET['id'];
				
				$sql="SELECT * FROM names WHERE id=$id";
				$result=mysqli_query($conn,$sql);
				if ($result){
					$row=mysqli_fetch_assoc($result);
					$name=$row['Name'];
					$phone=$row['Phone'];
					$address=$row['Address'];
				}
				?>
				<form method="post" action="edit_action.php">
					<input  type="text" name="name" id="name" class="form-field" placeholder="Name" value="<?php global $name; echo $name ?>" required=""><br>
					<input type="number" name="phone" class="form-field" placeholder="Phone number" value="<?php global $phone; echo $phone ?>" required=""><br>
					<input  type="text" name="address" id="address" value="<?php global $address; echo $address ?>" class="form-field" placeholder="Address"  required=""><br>
					<input  type="hidden" name="ID" id="addressID" value="<?php global $id; echo $id ?>" required="">
					<input type="submit" class="form-button" value="UPDATE CHANGES">
				</form>
				</center>
			</div>
		</div>
	</div>
	<div id="footer"><center>&copy;BIMARSHA KHANAL 2020</center></div>
</body>
</html>
