<?php
$room = $_POST['room'];
include 'connecttodb.php';
 $sql = "SELECT*FROM `message` WHERE `room` ='$room'";
$html_content = "";
$res = mysqli_query($connection,$sql);
 if(mysqli_num_rows($res)>0)
 {
     while ($row = mysqli_fetch_assoc($res)) { 
         $field='message';
        echo "<p>";
        foreach ($row as $field => $value) { 
            if($field=='message')
            {
            echo "<h3>" . $value . "<br></h3>"; 
            } 
        }
        echo "</p>";
   }
    //  while($rows=mysqli_fetch_assoc($res))
    //  {
    //      echo $rows;
    //     // $res =$res.'<div class="container"><h1>';
    //     // $res=$res.$row['ips']."</h1>";
    //     // $res=$res."says <p>".$row['message'];
    //     // $res=$res.'</p> <span class = "time-right">'.$row['date']."</span></div>";
    //  }
    //  echo $res;
 }
else{
    echo "Give the link to the person you want to talk of this chatroom and then chat anonymously, there is small bug right now, so u have to scroll it again and again to get new messages, we are trying to debug it. <br> Thank you, <br> Team SD";
}
mysqli_close($connection);
?>