<?php
$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
$query = "SELECT * FROM BarBeerDrinker.DRINKER";
$result = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
</head>
<body>
	<h3 align="left">Display Drinker Information<br></h3>
	<div class="table-responsive">
		<table id="drinker_data" class="table table-striped table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">Name</th>
					<th scope="col">Street</th>
					<th scope="col">City</th>
					<th scope="col">State</th>
					<th scope="col">Phone</th>
					<th scope="col">SSN</th>
					<th scope="col">DriverLicense</th>

				</tr>
			</thead>
			<?php
			while($row = mysqli_fetch_array($result))
			{
				echo '
				<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["Name"].'</td>
				<td>'.$row["Street"].'</td>
				<td>'.$row["City"].'</td>
				<td>'.$row["State"].'</td>
				<td>'.$row["Phone"].'</td>
				<td>'.$row["SSN"].'</td>
				<td>'.$row["DriverLicense"].'</td>
				</tr>
				';
			}
			?>
		</table>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#drinker_data').DataTable();
	});
</script>
