<?php
$connect = mysqli_connect("localhost", "root", "", "pharmacy");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM items 
	WHERE id LIKE '%".$search."%'
	OR name LIKE '%".$search."%' 
	OR Category LIKE '%".$search."%' 
	OR price LIKE '%".$search."%' 
	OR description LIKE '%".$search."%'
	OR stock LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM items ORDER BY name";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>category</th>
							<th>price</th>
							<th>stock</th>
							<th>description</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["category"].'</td>
				<td>'.$row["price"].'</td>
				<td>'.$row["stock"].'</td>
				<td>'.$row["description"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>