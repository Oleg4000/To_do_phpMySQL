<?php
require_once 'todo_config.php';
//print_r($_POST);

$city = $_POST['city'];
$who = $_POST['who'];
$task = $_POST['task'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
mysqli_query($connect, "INSERT INTO to_do_car (`id`, `city`,`who`,`task`,`date_start`,`date_end`,`submit`) VALUES (NULL,'$city','$who','$task','$date_start','$date_end',NULL)");
header('location: todo_car_in.php');

// $q="INSERT INTO to_do_car (`id`, `city`,`who`,`task`,`date_start`,`date_end`,`submit`) VALUES (NULL,'$city','$who','$task','$date_start','$date_end',NULL)";
// $result = $connect->query($q);
// $strInitiatorList = '';
// if ($result) {
//     $result->free();
//     $jsonResult['EmailReciepients'] = array('result' => 'location:todo_car_in.php');
//     header('location:todo_car_in.php');
// } else {
//     $jsonResult['EmailReciepients'] = array('error' => "MySQL error: $query<br>" . $db->error);
// }
// echo json_encode($jsonResult);
// die();

//submitted date checkbox
?>