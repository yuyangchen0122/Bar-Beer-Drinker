<?php
/** Search city based on country
*/

#include database configuration file
require_once('DbConnection.php');
$country_id = $_GET['country_id'];
$query = "SELECT * FROM BarBeerDrinker.select_bar where country_id = '$country_id' ORDER BY region";
$regions_data=mysqli_query($connection,$query);
$regions = array();
while($region = mysqli_fetch_assoc($regions_data)){
	array_push($regions, $region);
}
print_r(json_encode($regions));

?>