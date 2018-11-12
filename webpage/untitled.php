<?php
$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
?>
<div class="container">
					<h3 class="page_subtitle">Bars where this beer sells the most</h3>
					<h3 class="page_subtitle">Please Enter a Item Name in the Following Text Area</h3>
					<form action="untitled.php" method="post">

						<input style="    width: 100%;
						padding: 12px 20px;
						margin: 8px 0;
						box-sizing: border-box;
						border: 2px solid black;
						border-radius: 4px;
						"type="text" placeholder="Please Enter the Item Name"
						value="<?php echo $inputBeer1;?>" name="inputBeer1" />


						<button type="submit" title="Start type" name="typedBeer1">Submit</button>
					</form>
					<?php
					if (isset($_POST['typedBeer1'])) {
						$beer1=$_POST['inputBeer1'];
						$query1 = "SELECT BILL.License, COUNT(BILL.License) AS TotalAmount
									FROM BarBeerDrinker.BILL
									LEFT JOIN BarBeerDrinker.Transaction ON BILL.BillID=Transaction.BillID
									LEFT JOIN BarBeerDrinker.Sells ON Transaction.ItemID=Sells.ItemID
									WHERE Sells.Item = '$beer1'
									GROUP BY BILL.License
									ORDER BY TotalAmount DESC
									LIMIT 10";
						$result1 = mysqli_query($db, $query1);
					}
					?>
					<div class="container">
						<?php
						if (!$result1) {
								        // the query failed and debugging is enabled
							echo "<p>There was an error in query: $query1</p>";
							echo $mysqli->error;
						}
						?>
					</div>
					<script type="text/javascript" src="loder.js"></script>
					<script type="text/javascript">
						google.charts.load('current', {'packages':['corechart']});

						google.charts.setOnLoadCallback(drawChart);
						function drawChart(){
							var data = new google.visualization.DataTable();
							var data = google.visualization.arrayToDataTable([
								['License','TotalAmount'],
								<?php
								while($row = mysqli_fetch_assoc($result1)){
									echo "['".$row["License"]."', ".$row["TotalAmount"]."],";
								}
								?>
								]);

							var options = {
								title: 'Bar graph of top bars where this beer sells the most.',
								curveType: 'function',
								legend: { position: 'bottom' }
							};

							var chart = new google.visualization.BarChart(document.getElementById('Barchart1'));
							chart.draw(data, options);

						}

					</script>
					<div id="Barchart1" style="width: 900px; height: 400px"></div>
				</div>