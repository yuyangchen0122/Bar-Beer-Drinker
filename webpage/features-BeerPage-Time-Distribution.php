<?php
$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
?>
<div class="container">
	<h3 class="page_subtitle">Time distribution of when this beer sells the most </h3>
	<h3 class="page_subtitle">Please Enter a Beer Name in the Following Text Area</h3>
	<form action="features-BeerPage.php" method="post">

		<input style="    width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid black;
		border-radius: 4px;
		"type="text" placeholder="Please Enter the Beer Name"
		value="<?php echo $inputBeer3;?>" name="inputBeer3" />


		<button type="submit" title="Start type" name="typedBeer3">Submit</button>
	</form>
	<?php
	if (isset($_POST['typedBeer3'])) {
		$beer3=$_POST['inputBeer3'];
		$query3 = "SELECT Transaction.TransactionID, BILL.Time
		FROM BarBeerDrinker.BILL
		LEFT JOIN BarBeerDrinker.Transaction ON BILL.BillID=Transaction.BillID
		LEFT JOIN BarBeerDrinker.Sells ON Transaction.ItemID = Sells.ItemID
		WHERE Sells.Item = '$beer3'
		ORDER BY BILL.Time DESC
		";
		$result3 = mysqli_query($db, $query3);
	}
	?>
	<div class="container">
		<?php
		if (!$result3) {
								        // the query failed and debugging is enabled
			echo "<p>There was an error in query: $query3</p>";
			echo $mysqli->error;
		}
		?>
	</div>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart(){
			var data = new google.visualization.DataTable();
			var data = google.visualization.arrayToDataTable([
				['Time','TransactionID'],
				<?php
				while($row = mysqli_fetch_assoc($result3)){
					echo "['".$row["Time"]."', ".$row["TransactionID"]."],";
				}
				?>
				]);

			var options = {
				title: 'Time distribution of when this beer sells the most',
				hAxis: {title: 'Time'},
				vAxis: {title: 'TransactionID'},
				legend: 'none'
			};

			var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
			chart.draw(data, options);

		}

	</script>
	<div id="chart_div" style="width: 900px; height: 400px"></div>
</div>	