<?php
include "db.php";
$id=$_POST['ID'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql="UPDATE `names` SET `Name` = '$name', `Phone` = '$phone', `Address` = '$address' WHERE `names`.`ID` = $id;";
$result=mysqli_query($conn,$sql);
if ($result){
	header("Location:index.php");
}
?>