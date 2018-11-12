<?php
$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
$query = "SELECT * FROM BarBeerDrinker.Items WHERE Category = 'beer'";
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
      <h3 align="left">Display Beer Information<br></h3>
      <div class="table-responsive">
        <table id="beer_data" class="table table-striped table-bordered">
          <thead class="thead-dark">
						<tr>
							<th scope="col">Item</th>
							<th scope="col">Category</th>
							<th scope="col">Manufacturers</th>
					</tr>
          </thead>
          <?php
          while($row = mysqli_fetch_array($result))
          {
          echo '
					<tr>
								<td>'.$row["Item"].'</td>
								<td>'.$row["Category"].'</td>
								<td>'.$row["Manufacturers"].'</td>
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
$('#beer_data').DataTable();
});
</script>
