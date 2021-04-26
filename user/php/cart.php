<?php
	if (isset($_GET['id'])) {
		session_start();
		include_once '../includes/db.inc.php';
		$id = $_GET['id'];
		$sql = "select * from items where id='$id';";
		$res = mysqli_query($conn, $sql);
		$rescheck = mysqli_num_rows($res);
		if ($rescheck > 0) {
			while($row = mysqli_fetch_assoc($res)) {
				$user = $_SESSION['username'];
				$name = $row['name'];
				$price = $row['price'];
				$category = $row['category'];
				$cat = strtolower(str_replace(' ','',$category));
				$qty = 1;
				$sqlone = "insert into cart(iid,name,price,username,quantity,date) values('$id','$name', '$price', '$user','$qty',now());";
				mysqli_query($conn, $sqlone);
				?>
				<script type="text/javascript">
					alert("Item added to cart!!");
					location.replace("../<?php echo $cat ?>.php");
				</script>
				<?php
			}
		}
	}
	?>	