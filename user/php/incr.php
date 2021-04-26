<?php

include_once '../includes/db.inc.php';

if (isset($_GET['incr'])) {
	$iid = $_GET['incr'];
	$sql = "select * from cart where iid='$iid'";
	$res = mysqli_query($conn, $sql);
	$rescheck = mysqli_num_rows($res);
	if ($rescheck > 0) {
		while ($row = mysqli_fetch_assoc($res)) {
			$qty = $row['quantity'];
			$qty = $qty + 1;
			$sqlone = "update cart set quantity='$qty' where iid='$iid';";
			mysqli_query($conn, $sqlone);
			 header("Location: ../viewcart.php");
		}
	}
	
}


if (isset($_GET['dcr'])) {
	$iid = $_GET['dcr'];
	$sql = "select * from cart where iid='$iid'";
	$res = mysqli_query($conn, $sql);
	$rescheck = mysqli_num_rows($res);
	if ($rescheck > 0) {
		while ($row = mysqli_fetch_assoc($res)) {
			$qty = $row['quantity'];
			if($qty>1){
			$qty = $qty - 1;
			}
			$sqlone = "update cart set quantity='$qty' where iid='$iid';";
			mysqli_query($conn, $sqlone);
			 header("Location: ../viewcart.php");
		}
	}
	
}