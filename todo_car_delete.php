<?php
require_once './todo_config.php';
$id_task=$_GET['id'];
$q=mysqli_query($connect,"DELETE FROM to_do_car WHERE `to_do_car`.`id` = $id_task");
header('location: todo_car_in.php');
?>