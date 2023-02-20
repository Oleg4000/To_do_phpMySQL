<?php
require_once './todo_config.php';
$id_task=$_GET['id'];
$q=mysqli_query($connect,"DELETE FROM todo_car WHERE `todo_car`.`id_task` = $id_task");
header('location: todo_car_in.php');
