<!doctype html>
<html>
<head>
<script src="index.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<title>CONTACT APPLICATION</title>
</head>
<body>
<div id="outer">
	<div id="header"><h1 align="center">CONTACT APPLICATION</h1></div>
	<div id="main-wrapper">
		<div id="main">
			<div id="login">
				<center>
				<h2>NEW CONTACT</h2>
				<form method="post" action="add_data.php">
					<input  type="text" name="name" id="name" class="form-field" placeholder="Name" required=""><br>
					<input type="number" name="phone" class="form-field" placeholder="Phone number" required=""><br>
					<input  type="text" name="address" id="address" class="form-field" placeholder="Address" required=""><br>
					<input type="submit" class="form-button" value="SAVE">
				</form>
				</center>
			</div>
			<hr>
			<center><h2>CONTACT LIST</h2>
			<div id="list">
			<table>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>PHONE</th>
					<th>ADDRESS</th>
					<th>ACTION</th>
					</tr>
				<?php
				include "db.php";
				$sql="SELECT * FROM names";
				$result=mysqli_query($conn,$sql);
				if ($result){
					while ($row=mysqli_fetch_assoc($result)){
						$id=$row["ID"];
						$name=$row["Name"];
						$phone=$row["Phone"];
						$address=$row["Address"];
						?>
					<tr>
					<td><?php echo $id ?></td>
					<td><?php echo $name ?></td>
					<td><?php echo $phone ?></td>
					<td><?php echo $address ?></td>
					<td><a href="edit.php?id=<?php echo $id ?>">Edit</a>      <a href="delete.php?id=<?php echo $id ?>">Delete</a></td>
					</tr>
					<?php
					}
				}
				?>
			</table></center>
		</div>
		</div>
	<div id="footer"><center>&copy;BIMARSHA KHANAL 2020</center></div>
	</div>
</body>
</html>
