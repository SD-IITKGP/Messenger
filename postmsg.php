<?php
$message=$_POST['text'];
$room=$_POST['room'];
$ip=$_SERVER['REMOTE_ADDR'];
include 'connecttodb.php';
// include 'room.php';
$sql="INSERT INTO `message` (`message`, `room`, `date`, `ips`) VALUES ('$message', '$room', current_timestamp(), '$ip')";
$result = mysqli_query($connection, $sql);
mysqli_close($connection);
?>