
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chatroom.css">
    <link rel="icon"
        href="favicon.ico">
    <title>Chatroom</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    var message = $("#message").val();
    var room ='<?php $room= $_GET['room']; echo $room; ?>';
    $.post("postmsg.php",
    {
      text: message,
      room: room
    },
    function(data,status){
        document.getElementsByClassName('chatbox')[0].innerHTML=data;
    });
    $("#message").val("");
  return false;
  });
});
setInterval(chk,1000);
function chk()
{
    var room ='<?php $room= $_GET['room']; echo $room; ?>';
    console.log(room);
    $.post("getchat.php",{room: room},
    function(data,status){
        document.getElementsByClassName('chatbox')[0].innerHTML=data;
    }
    )
}
</script>
</head>
<body>
    <nav class="navi">
        <a  href="https://sd-iitkgp.github.io/SF/">Home</a>
        <a href="https://sd-iitkgp.github.io/SF/achievements">Achievements</a>
        <a href="https://sd-iitkgp.github.io/SF/Intersts">Intersts</a>
        <a href="https://sd-iitkgp.github.io/SF/contact">Contact</a>
        <a href="https://sd-iitkgp.000webhostapp.com/">Message</a>
        <a  class="active"  href="chatroom.php">Chatroom</a>
    </nav>
    <h1 style="z-index: 1; position: absolute; top: 20%;">chatroom name- <?php $room= $_GET['room']; echo $room; ?> </h1>
    <div class="container">
        <div class="chatbox">
        </div>
    </div>
    <div style="z-index: 1; display: flex; flex-direction: row; position: fixed; bottom: 12%; width: 100%; justify-content: center;">
        <input type="text" placeholder="Message" required id="message" name="message" style="font-family: 'Denk One', sans-serif; font-size: 200%; width: 70%;">
        <button id="send" style="z-index:1;">Send</button>
    </div>
<footer>
    <h1 id="rights">SOURABH CHOUDHARY (2021-2022) | @ All Rights Reserved</h1>
</footer>
</body>

</html>