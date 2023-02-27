<?php
require_once "./todo_config.php";
$id_task=$_GET['id'];
//print_r($_GET);
$sub_but = date("Y-m-d");
//echo $sub_but;
$q=mysqli_query($connect,"UPDATE `to_do_car` SET `submit_date`='$sub_but' WHERE `to_do_car`.`id`='$id_task'");
header('location: todo_car_in.php');
?>
