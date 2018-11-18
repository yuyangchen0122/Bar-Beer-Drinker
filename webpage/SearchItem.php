<?php
/** Search city based on states
*/

#include database configuration file
require_once('DbConnection.php');
$Bar_id = $_GET['bar_id'];
$Bars_data=mysqli_query($connection,"SELECT * FROM BarBeerDrinker.select_item where bar_id = $Bar_id ORDER BY Item");
$Bars = array();
while($Bar = mysqli_fetch_assoc($Bars_data)){
	array_push($Bars, $Bar);
}
print_r(json_encode($Bars));

?>