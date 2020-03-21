<?php

$name = $_POST["name"];
$phone = $_POST["phone"];
$address = $_POST["address"];
echo $name."<br>";
echo $phone;

include "db.php";
$sql="INSERT INTO `names` (`Name`, `Phone`, `Address`) VALUES ('$name', '$phone', '$address')";
$result=mysqli_query($conn,$sql);
if ($result) {
	header("Location:index.php");
}
?>
