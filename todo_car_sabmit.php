<?php
require_once "./todo_config.php";
$id_task=$_GET['id'];
//print_r($_GET);
$sub_but = date("Y-m-d");
//echo $sub_but;
$q=mysqli_query($connect,"UPDATE `todo_car` SET `submit_date`='$sub_but' WHERE `todo_car`.`id_task`='$id_task'");
header('location: todo_car_in.php');
?>
