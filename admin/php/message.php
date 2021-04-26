<?php 
	include_once '../includes/db.inc.php';
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$address= $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
        $message= $_POST['message'];
		$sql = "insert into contact(id,name, phone, email, message) values($name', '$phone', '$email', '$message');";
		$res = mysqli_query($conn, $sql);
		if (!$res) {
            header("Location: ../request.php?result=fail");
		} else {
            header("Location: ../index.php?result=success");
		}
	}