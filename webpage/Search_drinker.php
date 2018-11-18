<?php
/** Search city based on country
*/

#include database configuration file
require_once('DbConnection.php');
$drinker_state_id = $_GET['state_id'];
$query = "SELECT * FROM BarBeerDrinker.select_bar where state_id = '$country_id' ORDER BY Bar";
$Bars_data=mysqli_query($connection,$query);
$Bars = array();
while($Bar = mysqli_fetch_assoc($Bars_data)){
	array_push($Bars, $Bar);
}
print_r(json_encode($Bars));

?>