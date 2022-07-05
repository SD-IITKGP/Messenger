<?php
$room=$_GET['room'];
include 'connecttodb.php';
$sql="SELECT * FROM `name` WHERE room = '$room'";
$result = mysqli_query($connection, $sql);
if($result)
{
    if(mysqli_num_rows($result)==0)
    {
    $message="There is no room with this name or link. Try creating a new one";
    echo'<script language= "javascript">';
    echo 'alert("'.$message.'");';
    echo'window.location="sdchat.php";';
    echo'</script>';
    }

else{
    $message="Redirecting to your space";
    echo'<script language= "javascript">';
    // echo 'alert("'.$message.'");';
    echo'window.location="chatroom.php?room='.$room.'";';
    echo'</script>';
}}
else{
    echo "ERROR:".mysqli_error($connection);
}
?>