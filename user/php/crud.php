<?php

include_once '../includes/db.inc.php';

if (isset($_GET['delete'])) {
	$iid = $_GET['delete'];
	$sql = "delete from cart where iid='$iid'";
	mysqli_query($conn, $sql);
	header("Location: ../viewcart.php");
}