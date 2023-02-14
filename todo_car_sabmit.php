<?php
require_once 'todo_config.php';

$sub_but = date("Y-m-d");
/* $city = $_POST['city'];
$who = $_POST['who'];
$task = $_POST['task'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$id=$_POST['id'];
mysqli_query($connect, "UPDATE `to_do_car` SET `who` = '$who', `task` = '$task', `date_start` = '$date_start', `date_end` = '$date_end', `submit`='$sub_but' WHERE `to_do_car`.`id` =$id "); */


$get_id = $_GET ['id'];


$q="UPDATE `to_do_car` SET `submit`='$sub_but' WHERE `to_do_car`.`id` =$get_id";
header('location: todo_car_in.php');



$result = $connect->query($q);
$strInitiatorList = '';
if ($result) {
    $result->free();
    $jsonResult['EmailReciepients'] = array('result' => 'location:todo_car_in.php');
    header('location:todo_car_in.php');
} else {
    echo $q;
    // $jsonResult['EmailReciepients'] = array('error' => "MySQL error: $query<br>" . $conect->error);
}
echo json_encode($jsonResult);
die();

//header('location: todo_car_in.php');
?>