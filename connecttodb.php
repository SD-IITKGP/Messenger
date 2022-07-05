<?php
// $insert=false;
$server = "localhost";
$username = "id16501941_admin";
$password ="Sourabh1503.";
$database="id16501941_chatroom";
$connection = mysqli_connect($server,$username,$password,$database);
if(!$connection)
{
  die("ERROR:".mysqli_connect_error());
}
?>