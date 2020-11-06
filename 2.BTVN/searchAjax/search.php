<?php

include('config.php');
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT * FROM sinhvien WHERE CustomerName LIKE '%".$search."%'";
}
else
{
	$query = "SELECT * FROM sinhvien ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal Code</th>
							<th>Country</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["CustomerName"].'</td>
				<td>'.$row["Address"].'</td>
				<td>'.$row["City"].'</td>
				<td>'.$row["PostalCode"].'</td>
				<td>'.$row["Country"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'không có dữ liệu tìm kiếm';
}
?>