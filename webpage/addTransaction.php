<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Transaction</title>
    <script src="js/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>    

<style type="text/css">
header {
background-color: #79ACCD;
height: 70px;
text-align: center;
color: #fff;
width: 100%;
}
</style>
  </head>
  <body>    
<header>
	<h2>Add Transaction</h2>
</header>
  <div class="container-fluid" >
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <br><br><br>
	<form class="form-horizontal" role="form" >
	  <div class="form-group">
	    <div class="col-sm-10">
	    	<label>Select State</label>
	        <select class="form-control" name="country" id="country">
	        <option value="0">Select State</option>	
	        <?php
				require_once('DbConnection.php');
				$countries=mysqli_query($connection,"SELECT * FROM BarBeerDrinker.country ORDER BY country");
				while($country = mysqli_fetch_assoc($countries)){
					echo "<option value='".$country['id']."'>".$country['country']."</option>";
				}
			?>
	        </select>
	        <br>
	    </div>
	    <div class="col-sm-10">
	    	<label>Select Bar</label>
	        <select class="form-control" name="region" id="region">
	        	<option value="0">Select Bar</option>
	        </select>
	        <br>
	    </div>
	    <div class="col-sm-10">
	    	<label>Select Item</label>
	        <select class="form-control" name="city" id="city">
	        <option value="0">Select Item</option>
	        </select>
	        <br>
	    </div>
	  </div>
	</form> 
	<?Php

$todo=$_POST['todo'];

if(isset($todo) and $todo=="submit"){

$month=$_POST['month'];

$dt=$_POST['dt'];

$year=$_POST['year'];

$date_value="$month/$dt/$year";

echo "mm/dd/yyyy format :$date_value<br>";

$date_value="$year-$month-$dt";

echo "YYYY-mm-dd format :$date_value<br>";

$hour=$_POST['hour'];

$minute=$_POST['minute'];

$second=$_POST['second'];

$time_value="$hour:$minute:$second";
echo "hh/mm/ss format :$time_value<br>";


}



?>

<form method=post name=f1 action=''><input type=hidden name=todo value=submit>

<table border="0" cellspacing="0" >

<tr><td  align=left  >Select Hour   

<select name=hour value=''>Select Hour</option>
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

<tr><td  align=left  >Select Minute   

<select name=minute value=''>Select Minute</option>
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

<tr><td  align=left  >Select Second   

<select name=second value=''>Select Second</option>
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
<tr><td  align=left  >   

<select name=month value=''>Select Month</option>
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



</td><td  align=left  >Date<select name=dt >

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


</td><td  align=left  >   
Year(yyyy)<input type=text name=year size=4 value=2005>
<input type=submit value=Submit>
</table>
</form> 
    </div>
    
  </div>
  </div>
  </body>
</html>