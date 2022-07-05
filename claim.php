<?php
$room=$_POST['room'];
$name=$_POST['name'];
if(strlen($room)<2)
{
    $message="Please enter a name between 2 to 20 characters";
    echo'<script language= "javascript">';
    echo'alert("'.$message.'");';
    echo'window.location="sdchat.php";';
    echo'</script>';
}
elseif(!ctype_alnum($room))
{
    $message="Please enter alphanumeric name";
    echo'<script language= "javascript">';
    echo 'alert("'.$message.'");';
    echo'window.location="sdchat.php";';
    echo'</script>';
}
else{
    include 'connecttodb.php';
}

// echo"lets chat now";
$sql="SELECT * FROM `name` WHERE room = '$room'";
$result = mysqli_query($connection, $sql);
if($result)
{
    if(mysqli_num_rows($result)>0)
    {
    $message="Please choose a different roomname, this name has already been taken";
    echo'<script language= "javascript">';
    echo 'alert("'.$message.'");';
    echo'window.location="sdchat.php";';
    echo'</script>';
    }

else{
    $sql = "INSERT INTO `name` (`room`, `name`, `date`) VALUES ('$room', '$name', current_timestamp());";
    if(mysqli_query($connection, $sql))
    {
    $message="Your room is ready, redirecting to your space";
    echo'<script language= "javascript">';
    echo 'alert("'.$message.'");';
    echo'window.location="room.php?room='.$room.'";';
    echo'</script>';
    }
}}
else{
    echo "ERROR:".mysqli_error($connection);
}
?>