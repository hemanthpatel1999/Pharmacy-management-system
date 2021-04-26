
<?php 
	include_once '../includes/db.inc.php';
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message= $_POST['message'];
		$sql = "insert into contact(username,email,phone,message) values ('$name','$email','$phone','$message');";
		$res = mysqli_query($conn, $sql);
		if (!$res) {
			header("Location: ../request.php?result=fail");
		} else {
            header("Location: ../index.php?result=success");
		}
	}
	?>