<?php
/** Search city based on states
*/

#include database configuration file
require_once('DbConnection.php');
$Bar_id = $_GET['bar_id'];
$Bars_data=mysqli_query($connection,"SELECT * FROM
(SELECT Sells.ItemID as id, BAR.Bar, Sells.Item, select_state.id as state_id, BAR.id as bar_id FROM BarBeerDrinker.Sells
LEFT JOIN BarBeerDrinker.BAR ON Sells.Bar = BAR.Bar
LEFT JOIN BarBeerDrinker.select_state
ON BAR.State=select_state.State) AS temp
where temp.bar_id = $Bar_id
ORDER BY temp.Item ASC");
$Bars = array();
while($Bar = mysqli_fetch_assoc($Bars_data)){
	array_push($Bars, $Bar);
}
print_r(json_encode($Bars));

?>