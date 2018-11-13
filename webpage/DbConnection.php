<?php
define('DB_SERVER', 'rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'yuyangchen0122');
define('DB_PASSWORD', 'a123123q45');
define('DB_DATABASE', 'RUCS336Group66');
$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_error());
?>