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
	<script src="js/custom.js"></script>  
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
			$query11 = "SELECT * FROM BarBeerDrinker.testing1";
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
			$query12 = "SELECT * FROM BarBeerDrinker.testing2";
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
							<input type=text name=billID size=20 value="">
							<br>
						</div>
						<div class="col-sm-10">
							<label>Input Your Name(First-Last)</label>
							<input type=text name=name size=20 value="">
							<br>
						</div>
						<div class="col-sm-10">
							<label>Input Your SSN(xxx-xx-xx)</label>
							<input type=text name=ssn size=20 value="">
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label>Select State</label>
							<select class="form-control" name="country" id="country">
								<option value="0">Select State</option>	
								<?php
								require_once('DbConnection.php');
								$countries=mysqli_query($connection,"SELECT * FROM BarBeerDrinker.select_state ORDER BY country");
								while($country = mysqli_fetch_assoc($countries)){
									echo "<option value='".$country['id']."'>".$country['country']."</option>";
								}
								?>
							</select>
							<br>
						</div>
						<div class="col-sm-3">
							<label>Select Bar</label>
							<select class="form-control" name="region" id="region">
								<option value="0">Select Bar</option>
							</select>
							<br>
						</div>
						<div class="col-sm-3">
							<label>Select Item</label>
							<select class="form-control" name="city" id="city">
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
							<label>Select year(yyyy)</label>
							<select class="form-control" name=dt >

								<option value='01'>2010</option>
								<option value='02'>2011</option>
								<option value='03'>2012</option>
								<option value='04'>2013</option>
								<option value='05'>2014</option>
								<option value='06'>2015</option>
								<option value='07'>2016</option>
								<option value='08'>2017</option>
								<option value='09'>2018</option>
								<option value='10'>2019</option>
								<option value='11'>2020</option>
							</select>
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

	$todo=$_POST['todo'];

	if(isset($todo) and $todo=="submit"){

		$errors = array();

		$inputBillID=$_POST['billID'];

		$name=$_POST['name'];

		echo "Your name : $name<br>";

		$input_ssn=$_POST['ssn'];

		echo "Your SSN: $input_ssn<br>";

		$month=$_POST['month'];

		$dt=$_POST['dt'];

		$year=$_POST['year'];


		$date_value="$year-$month-$dt";

		echo "YYYY-mm-dd format :$date_value<br>";

		$hour=$_POST['hour'];

		$minute=$_POST['minute'];

		$second=$_POST['second'];

		$time_value="$hour:$minute:$second";
		echo "hh/mm/ss format :$time_value<br>";

		$country1=$_POST['country'];
		$region1=$_POST['region'];
		$city1=$_POST['city'];

		if (empty($inputBillID)) {
			array_push($errors, "Bill ID is required");
		}
		if (empty($name)) {
			array_push($errors, "Your name is required");
		}
		if (empty($input_ssn)) {
			array_push($errors, "Your SSN is required");
		}
		if (empty($month)) {
			array_push($errors, "Month is required");
		}
		if (empty($dt)) {
			array_push($errors, "Day is required");
		}
		if (empty($year)) {
			array_push($errors, "Year is required");
		}
		if (empty($hour)) {
			array_push($errors, "Hour is required");
		}
		if (empty($minute)) {
			array_push($errors, "Minute is required");
		}
		if (empty($second)) {
			array_push($errors, "Second is required");
		}
		if (empty($country1)) {
			array_push($errors, "State is required");
		}
		if (empty($region1)) {
			array_push($errors, "Bar is required");
		}
		if (empty($city1)) {
			array_push($errors, "Item is required");
		}

		$query3 = "
		SELECT * 
		FROM BarBeerDrinker.select_state
		WHERE id = '$country1'
		";
		$result3 = mysqli_query($db,$query3);
		while ($row = mysqli_fetch_array($result3)) {
			$state_selected = $row["country"];
			echo "The State you selected is:$state_selected<br>";
		}

		$query4 = "
		SELECT * 
		FROM BarBeerDrinker.select_bar
		WHERE id = '$region1'
		";
		$result4 = mysqli_query($db,$query4);
		while ($row = mysqli_fetch_array($result4)) {
			$bar_selected = $row["region"];
			echo "The Bar you selected is:$bar_selected<br>";
		}

		$query5 = "
		SELECT * 
		FROM BarBeerDrinker.select_item
		WHERE id = '$city1'
		";
		$result5 = mysqli_query($db,$query5);
		while ($row = mysqli_fetch_array($result5)) {
			$item_selected = $row["city"];
			echo "The Bar you selected is:$item_selected<br>";
		}

		$query6 = "SELECT * FROM BarBeerDrinker.BAR
		LEFT JOIN BarBeerDrinker.select_bar 
		ON BAR.Bar = select_bar.region
		WHERE select_bar.id = $region1";
		$result6 = mysqli_query($db, $query6);
		while($row = mysqli_fetch_array($result6)){
			$bar_license = $row['License'];
			echo "The Bar license is: $bar_license<br>";
		}

		$query7 = "SELECT *
		FROM BarBeerDrinker.DRINKER
		WHERE DRINKER.SSN = $input_ssn;";
		$result7=mysqli_query($db,$query7);
		$check_ssn = mysqli_fetch_array($result7);
		if($check_ssn){
			if($check_ssn['SSN'] === $input_ssn){
				array_push($errors, "Sorry.This SSN has existed in our database.");
			}
		}

		$query2 = "SELECT BILL.BillID
		FROM BarBeerDrinker.BILL;";
		$result2=mysqli_query($db,$query2);
		while($row = mysqli_fetch_array($result2))
		{
			$bill_id = $row["BillID"];
		}
		echo "The Bill ID you just input is:$inputBillID<br>";
		if ($inputBillID >= $bill_id)
		{
			echo 'valid Bill ID selected.<br>';
		}else{
			array_push($errors, "This Bill ID has existed");
		}


		$query1 = "SELECT select_bar.id, select_bar.region, BAR.Open, BAR.Close 
		FROM BarBeerDrinker.BAR 
		LEFT JOIN BarBeerDrinker.select_bar ON BAR.id=select_bar.id 
		WHERE select_bar.id = '$region1'";
		$result1 = mysqli_query($db,$query1);
		while($row = mysqli_fetch_array($result1))
		{
			$open_time = $row["Open"];
			$close_time = $row["Close"];
			echo "The Open time for this bar is:$open_time<br>";
			echo "The Close for this bar is:$close_time<br>";

		}
		if (strtotime($time_value) > strtotime($open_time) && strtotime($time_value) < strtotime($close_time))
		{
			echo 'valid time selected.<br>';

		}else{
			array_push($errors, "This bar closes at the time of your choosing");
		}

		if(count($error) > 0){
			echo "Sorry, Transaction Updated failed! Please update again! Thanks! ";
		}

		if (count($errors) == 0) {
			$query9 = "INSERT INTO BarBeerDrinker.testing1 (BillID, Time, Date, SSN, License) VALUES('$inputBillID', '$time_value', '$date_value', '$input_ssn', '$bar_license')";
			mysqli_query($db, $query9);
			$query10 = "INSERT INTO BarBeerDrinker.testing2 (License, BillID, ItemID) VALUES ('$bar_license', '$inputBillID', '$city1')";
			mysqli_query($db, $query10);
			echo "Tansaction Updated successfully! Thanks!";
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