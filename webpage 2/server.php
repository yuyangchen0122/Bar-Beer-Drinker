<?php
session_start();

// initializing variables

$query = "";

// connect to the database
$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');


if (isset($_POST['modify_query'])) {
  $temp = $_POST["inputquery"];

  // receive all input values from the form
  $query = "inputquery"
  mysqli_query($db, $query);
}
?>