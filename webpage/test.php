<?php
$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<script src="js/jquery.min.js"></script>
	<script src="js/custom1.js"></script>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />

	<style type="text/css">


</style>
</head>
<div class="container">
	<h3 align="left">Bill Table<br></h3>
	<div class="table-responsive">
		<table id="bill_data" class="table table-striped table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">BillID</th>
					<th scope="col">Time</th>
					<th scope="col">Date</th>
					<th scope="col">SSN</th>
					<th scope="col">License</th>
				</tr>
			</thead>
			<?php
			$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
			$query11 = "SELECT * FROM BarBeerDrinker.BILL ORDER BY BillID DESC LIMIT 1000";
			$result11 = mysqli_query($db, $query11);
			while($row = mysqli_fetch_array($result11))
			{
				echo '<tr>
				<td>'.$row["BillID"].'</td>
				<td>'.$row["Time"].'</td>
				<td>'.$row["Date"].'</td>
				<td>'.$row["SSN"].'</td>
				<td>'.$row["License"].'</td>
				</tr>
				';
			}
			?>
		</table>
	</div>
</div>

<div class="container">
	<h3 align="left">Transaction Table<br></h3>
	<div class="table-responsive">
		<table id="transaction_data" class="table table-striped table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">License</th>
					<th scope="col">BillID</th>
					<th scope="col">ItemID</th>
				</tr>
			</thead>
			<?php
			$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
			$query12 = "SELECT * FROM BarBeerDrinker.Transaction ORDER BY BillID DESC LIMIT 1000";
			$result12 = mysqli_query($db, $query12);
			while($row = mysqli_fetch_array($result12))
			{
				echo '<tr>
				<td>'.$row["License"].'</td>
				<td>'.$row["BillID"].'</td>
				<td>'.$row["ItemID"].'</td>
				</tr>
				';
			}
			?>
		</table>
	</div>
</div>
<div class="container">
	<h3 align="left">Feel free to add another Transaction!<br></h3>
	<div class="row">
		<div class="col-lg-12">
			<br>

			<form method=post name=f1 action=''><input type=hidden name=todo value=submit>
				<div class="row">
					<div class="form-group" >
						<div class="col-sm-10">
							<label>Input a Bill ID(Formate: 0)</label>
							<input type=text name=billID size=20 placeholder="22315">
							<br>
						</div>
						<div class="col-sm-10">
							<label>Input Your SSN(xxx-xx-xx)</label>
							<input type=text name=ssn size=20 placeholder="000-00-00">
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label>Select State</label>
							<select class="form-control" name="State" id="State">
								<option value="0">Select State</option>	
								<?php
								require_once('DbConnection.php');
								$countries=mysqli_query($connection,"SELECT * FROM BarBeerDrinker.select_state ORDER BY State");
								while($country = mysqli_fetch_assoc($countries)){
									echo "<option value='".$country['id']."'>".$country['State']."</option>";
								}
								?>
							</select>
							<br>
						</div>
						<div class="col-sm-3">
							<label>Select Bar</label>
							<select class="form-control" name="Bar" id="Bar">
								<option value="0">Select Bar</option>
							</select>
							<br>
						</div>
						<div class="col-sm-3">
							<label>Select Item</label>
							<select class="form-control" name="Item" id="Item">
								<option value="0">Select Item</option>
							</select>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label>Select Hour</label>
							<select class="form-control" name=hour value=''>Select Hour</option>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								<option value='6'>6</option>
								<option value='7'>7</option>
								<option value='8'>8</option>
								<option value='9'>9</option>
								<option value='10'>10</option>
								<option value='11'>11</option>
								<option value='12'>12</option>
								<option value='13'>13</option>
								<option value='14'>14</option>
								<option value='15'>15</option>
								<option value='16'>16</option>
								<option value='17'>17</option>
								<option value='18'>18</option>
								<option value='19'>19</option>
								<option value='20'>20</option>
								<option value='21'>21</option>
								<option value='22'>22</option>
								<option value='23'>23</option>
								<option value='24'>24</option>
							</select>
							<br>
						</div> 
						<div class="col-sm-3">
							<label>Select Minute</label>
							<select class="form-control" name=minute value=''>Select Minute</option>
								<option value='00'>00</option>
								<option value='01'>01</option>
								<option value='02'>02</option>
								<option value='03'>03</option>
								<option value='04'>04</option>
								<option value='05'>05</option>
								<option value='06'>06</option>
								<option value='07'>07</option>
								<option value='08'>08</option>
								<option value='09'>09</option>
								<option value='10'>10</option>
								<option value='11'>11</option>
								<option value='12'>12</option>
								<option value='13'>13</option>
								<option value='14'>14</option>
								<option value='15'>15</option>
								<option value='16'>16</option>
								<option value='17'>17</option>
								<option value='18'>18</option>
								<option value='19'>19</option>
								<option value='20'>20</option>
								<option value='21'>21</option>
								<option value='22'>22</option>
								<option value='23'>23</option>
								<option value='24'>24</option>
								<option value='25'>25</option>
								<option value='26'>26</option>
								<option value='27'>27</option>
								<option value='28'>28</option>
								<option value='29'>29</option>
								<option value='30'>30</option>
								<option value='31'>31</option>
								<option value='32'>32</option>
								<option value='33'>33</option>
								<option value='34'>34</option>
								<option value='35'>35</option>
								<option value='36'>36</option>
								<option value='37'>37</option>
								<option value='38'>38</option>
								<option value='39'>39</option>
								<option value='40'>40</option>
								<option value='41'>41</option>
								<option value='42'>42</option>
								<option value='42'>43</option>
								<option value='44'>44</option>
								<option value='45'>45</option>
								<option value='46'>46</option>
								<option value='47'>47</option>
								<option value='48'>48</option>
								<option value='49'>49</option>
								<option value='50'>50</option>
								<option value='51'>51</option>
								<option value='52'>52</option>
								<option value='53'>53</option>
								<option value='54'>54</option>
								<option value='55'>55</option>
								<option value='56'>56</option>
								<option value='57'>57</option>
								<option value='58'>58</option>
								<option value='59'>59</option>
							</select>
							<br>
						</div>
						<div class="col-sm-3">
							<label>Select Second</label>
							<select class="form-control" name=second value=''>Select Second</option>
								<option value='00'>00</option>
								<option value='01'>01</option>
								<option value='02'>02</option>
								<option value='03'>03</option>
								<option value='04'>04</option>
								<option value='05'>05</option>
								<option value='06'>06</option>
								<option value='07'>07</option>
								<option value='08'>08</option>
								<option value='09'>09</option>
								<option value='10'>10</option>
								<option value='11'>11</option>
								<option value='12'>12</option>
								<option value='13'>13</option>
								<option value='14'>14</option>
								<option value='15'>15</option>
								<option value='16'>16</option>
								<option value='17'>17</option>
								<option value='18'>18</option>
								<option value='19'>19</option>
								<option value='20'>20</option>
								<option value='21'>21</option>
								<option value='22'>22</option>
								<option value='23'>23</option>
								<option value='24'>24</option>
								<option value='25'>25</option>
								<option value='26'>26</option>
								<option value='27'>27</option>
								<option value='28'>28</option>
								<option value='29'>29</option>
								<option value='30'>30</option>
								<option value='31'>31</option>
								<option value='32'>32</option>
								<option value='33'>33</option>
								<option value='34'>34</option>
								<option value='35'>35</option>
								<option value='36'>36</option>
								<option value='37'>37</option>
								<option value='38'>38</option>
								<option value='39'>39</option>
								<option value='40'>40</option>
								<option value='41'>41</option>
								<option value='42'>42</option>
								<option value='42'>43</option>
								<option value='44'>44</option>
								<option value='45'>45</option>
								<option value='46'>46</option>
								<option value='47'>47</option>
								<option value='48'>48</option>
								<option value='49'>49</option>
								<option value='50'>50</option>
								<option value='51'>51</option>
								<option value='52'>52</option>
								<option value='53'>53</option>
								<option value='54'>54</option>
								<option value='55'>55</option>
								<option value='56'>56</option>
								<option value='57'>57</option>
								<option value='58'>58</option>
								<option value='59'>59</option>
							</select>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label>Select Month</label>
							<select class="form-control" name=month value=''>Select Month</option>
								<option value='01'>January</option>
								<option value='02'>February</option>
								<option value='03'>March</option>
								<option value='04'>April</option>
								<option value='05'>May</option>
								<option value='06'>June</option>
								<option value='07'>July</option>
								<option value='08'>August</option>
								<option value='09'>September</option>
								<option value='10'>October</option>
								<option value='11'>November</option>
								<option value='12'>December</option>
							</select>
							<br>
						</div>
						<div class="col-sm-3">
							<label>Select day</label>
							<select class="form-control" name=dt >

								<option value='01'>01</option>
								<option value='02'>02</option>
								<option value='03'>03</option>
								<option value='04'>04</option>
								<option value='05'>05</option>
								<option value='06'>06</option>
								<option value='07'>07</option>
								<option value='08'>08</option>
								<option value='09'>09</option>
								<option value='10'>10</option>
								<option value='11'>11</option>
								<option value='12'>12</option>
								<option value='13'>13</option>
								<option value='14'>14</option>
								<option value='15'>15</option>
								<option value='16'>16</option>
								<option value='17'>17</option>
								<option value='18'>18</option>
								<option value='19'>19</option>
								<option value='20'>20</option>
								<option value='21'>21</option>
								<option value='22'>22</option>
								<option value='23'>23</option>
								<option value='24'>24</option>
								<option value='25'>25</option>
								<option value='26'>26</option>
								<option value='27'>27</option>
								<option value='28'>28</option>
								<option value='29'>29</option>
								<option value='30'>30</option>
								<option value='31'>31</option>
							</select>
							<br>
						</div>

						<div class="col-sm-3">
						</td><td  align=left  >   
							Year(yyyy)<input type=text name=year size=4 placeholder="2018">
							<br>
							<br>
							<input type=submit value=Submit>
							<br>
						</div>
					</div>


				</div>
			</form>
		</div>
	</div>
</div>
<div class="container">

	<?Php

	$errors = array();

	$todo=$_POST['todo'];

	if(isset($todo) and $todo=="submit"){

		$inputBillID=$_POST['billID'];

		$query2 = "SELECT BILL.BillID
		FROM BarBeerDrinker.BILL;";
		$result2=mysqli_query($db,$query2);
		while($row = mysqli_fetch_array($result2))
		{
			$bill_id = $row["BillID"];
		}
		echo "<h3>The Bill ID you just input is:$inputBillID</h3><br>";
		if ($inputBillID >= $bill_id)
		{
			echo '<h2>Valid Bill ID.</h2><br>';
		}else{
			array_push($errors, "This Bill ID has existed");
			echo '<h2>Invalid Bill ID</h2>';
		}

		$input_ssn=$_POST['ssn'];

		echo "<h3>Your SSN: $input_ssn</h3><br>";

		$query7 = "SELECT *
		FROM BarBeerDrinker.DRINKER
		WHERE DRINKER.SSN = '$input_ssn';";
		if($result7=mysqli_query($db,$query7)){

		if(mysqli_num_rows($result7)>0){

		echo '<h2>Valid Drinker Selected!</h2>';

		}else{

		array_push($errors, "Sorry.This drinker is not existed in our database.");
		echo '<h2>Sorry.This drinker is not existed in our database.</h2>';

		}
		}

		$month=$_POST['month'];

		$dt=$_POST['dt'];

		$year=$_POST['year'];

		$date_value="$year-$month-$dt";

		echo "<h3>YYYY-mm-dd format :$date_value</h3><br>";

		$hour=$_POST['hour'];

		$minute=$_POST['minute'];

		$second=$_POST['second'];

		$time_value="$hour:$minute:$second";
		echo "<h3>hh/mm/ss format :$time_value</h3><br>";

		$query1 = "SELECT * FROM
		(SELECT BAR.id, BAR.Bar, select_state.id as state_id, BAR.License, BAR.Open, BAR.Close FROM BarBeerDrinker.BAR
		LEFT JOIN BarBeerDrinker.select_state
		ON BAR.State=select_state.State) AS temp 
		WHERE temp.id = '$bar1'";
		$result1 = mysqli_query($db,$query1);
		while($row = mysqli_fetch_array($result1))
		{
			$open_time = $row["Open"];
			$close_time = $row["Close"];
			echo "<h3>The Open time for this bar is:$open_time</h3><br>";
			echo "<h3>The Close for this bar is:$close_time</h3><br>";

		}
		if (strtotime($time_value) > strtotime($open_time) && strtotime($time_value) < strtotime($close_time))
		{
			echo 'valid time selected.<br>';

		}else{
			array_push($errors, "This bar closes at the time of your choosing");
			echo '<h2>This bar closes at the time of your choosing</h2>';
		}

		$state1=$_POST['State'];
		$bar1=$_POST['Bar'];
		$item1=$_POST['Item'];

		if (empty($inputBillID)) {
			array_push($errors, "Bill ID is required");
			echo '<h2>Bill ID is required</h2>';
		}
		if (empty($input_ssn)) {
			array_push($errors, "Your SSN is required");
			echo '<h2>Your SSN is required</h2>';
		}
		if (empty($month)) {
			array_push($errors, "Month is required");
			echo '<h2>Month is required</h2>';
		}
		if (empty($dt)) {
			array_push($errors, "Day is required");
			echo '<h2>Day is required</h2>';
		}
		if (empty($year)) {
			array_push($errors, "Year is required");
			echo '<h2>Year is required</h2>';
		}
		if (empty($hour)) {
			array_push($errors, "Hour is required");
			echo '<h2>Hour is required</h2>';
		}
		if (empty($minute)) {
			array_push($errors, "Minute is required");
			echo '<h2>Minute is required</h2>';
		}
		if (empty($second)) {
			array_push($errors, "Second is required");
			echo '<h2>Second is required</h2>';
		}
		if (empty($state1)) {
			array_push($errors, "State is required");
			echo '<h2>State is required</h2>';
		}
		if (empty($bar1)) {
			array_push($errors, "Bar is required");
			echo '<h2>Bar is required</h2>';
		}
		if (empty($item1)) {
			array_push($errors, "Item is required");
			echo '<h2>Item is required</h2>';
		}

		$query3 = "
		SELECT * 
		FROM BarBeerDrinker.select_state
		WHERE id = '$state1'
		";
		$result3 = mysqli_query($db,$query3);
		while ($row = mysqli_fetch_array($result3)) {
			$state_selected = $row["State"];
			echo "<h3>The State you selected is:$state_selected</h3><br>";
		}

		$query4 = "
		SELECT * FROM
		(SELECT BAR.id, BAR.Bar, select_state.id as state_id FROM BarBeerDrinker.BAR
		LEFT JOIN BarBeerDrinker.select_state
		ON BAR.State=select_state.State) AS temp
		WHERE temp.id = '$bar1'
		";
		$result4 = mysqli_query($db,$query4);
		while ($row = mysqli_fetch_array($result4)) {
			$bar_selected = $row["Bar"];
			echo "<h3>The Bar you selected is:$bar_selected</h3><br>";
		}

		$query5 = "
		SELECT * FROM
		(SELECT Sells.ItemID as id, BAR.Bar, Sells.Item, select_state.id as state_id, BAR.id as bar_id FROM BarBeerDrinker.Sells
		LEFT JOIN BarBeerDrinker.BAR ON Sells.Bar = BAR.Bar
		LEFT JOIN BarBeerDrinker.select_state
		ON BAR.State=select_state.State) AS temp
		WHERE temp.id = '$item1'
		";
		$result5 = mysqli_query($db,$query5);
		while ($row = mysqli_fetch_array($result5)) {
			$item_selected = $row["Item"];
			echo "<h3>The Bar you selected is:$item_selected</h3><br>";
		}

		$query6 = "SELECT * FROM
		(SELECT BAR.id, BAR.Bar, select_state.id as state_id, BAR.License FROM BarBeerDrinker.BAR
		LEFT JOIN BarBeerDrinker.select_state
		ON BAR.State=select_state.State) AS temp
		WHERE temp.id = $bar1";
		$result6 = mysqli_query($db, $query6);
		while($row = mysqli_fetch_array($result6)){
			$bar_license = $row['License'];
			echo "<h3>The Bar license is: $bar_license</h3><br>";
		}

		if (count($errors) == 0) {
			$query9 = "INSERT INTO BarBeerDrinker.testing1 (BillID, Time, Date, SSN, License) VALUES('$inputBillID', '$time_value', '$date_value', '$input_ssn', '$bar_license')";
			mysqli_query($db, $query9);
			$query10 = "INSERT INTO BarBeerDrinker.testing2 (License, BillID, ItemID) VALUES ('$bar_license', '$inputBillID', '$item1')";
			mysqli_query($db, $query10);
			echo "<h1>Tansaction Updated successfully! Thanks!</h1>";
		}
		else{
			echo "<h1>Sorry, Transaction Updated failed! Please update again! Thanks! </h1>";
		}		
	}
	?>
</div>

</body>
</html>
<script>
	$(document).ready(function(){
		$('#bill_data').DataTable();
	});
</script>
<script>
	$(document).ready(function(){
		$('#transaction_data').DataTable();
	});
</script>