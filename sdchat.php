<?php

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sdchat.css">
    <link rel="icon"
        href="favicon.ico">
    <title>Chatroom</title>
</head>

<body>
    <nav class="navi">
        <a  href="https://sd-iitkgp.github.io/SF/">Home</a>
        <a href="https://sd-iitkgp.github.io/SF/achievements">Achievements</a>
        <a href="https://sd-iitkgp.github.io/SF/Intersts">Interests</a>
        <a href="https://sd-iitkgp.github.io/SF/contact">Contact</a>
        <a href="https://sd-iitkgp.000webhostapp.com/">Message</a>
        <a  class="active"  href="sdchat.php">Chatroom</a>
        <a href="https://sd-iitkgp.w3spaces.com">To Do App</a>
    </nav>
    <div class="chatbox">
    <h1 id="message">Type Your Anonymous Chat Room Name Here:</h1>
    <form action="claim.php" method="POST" id="form">
    sdchat.com/<input id="room" name="room" type="text" placeholder="chatroomname" style="font-size: 120%;" required><br>
    Name-<input id="name" name="name" type="text" placeholder="Your Name" style="font-size: 120%;" required>
    <button id="send">Claim</button>
    </form>
    </div>
<footer>
    <h1 id="rights">SOURABH CHOUDHARY (2021-2022) | @ All Rights Reserved</h1>
</footer>
</body>

</html>