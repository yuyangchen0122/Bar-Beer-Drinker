<?php
/** Search city based on country
*/

#include database configuration file
require_once('DbConnection.php');
$country_id = $_GET['state_id'];
$query = "SELECT * FROM
(SELECT BAR.id, BAR.Bar, select_state.id as state_id FROM BarBeerDrinker.BAR
LEFT JOIN BarBeerDrinker.select_state
ON BAR.State=select_state.State) AS temp where state_id = '$country_id' ORDER BY Bar";
$Bars_data=mysqli_query($connection,$query);
$Bars = array();
while($Bar = mysqli_fetch_assoc($Bars_data)){
	array_push($Bars, $Bar);
}
print_r(json_encode($Bars));

?>