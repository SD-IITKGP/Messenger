<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message</title>
  <link rel="stylesheet" href="message.css">
  <link rel="icon"
        href="favicon.ico">
</head>

<body id="formbody">
<nav class="navi">
        <a  href="https://sd-iitkgp.github.io/SF/">Home</a>
        <a href="https://sd-iitkgp.github.io/SF/achievements">Achievements</a>
        <a href="https://sd-iitkgp.github.io/SF/Intersts">Interests</a>
        <a href="https://sd-iitkgp.github.io/SF/contact">Contact</a>
        <a class="active" href="index.php">Message</a>
        <a href="sdchat.php">Chatroom</a>
        <a href="https://sd-iitkgp.w3spaces.com/">To Do App</a>
  </nav>
    <h1 style="padding: 3%;">Message Me</h1>
  <p>Write Your Message here, I will be glad to listen from You.</p>
  <div class="container">
     <form action="redirect.php" method="POST" id="form" style="padding: 2%;">
       <Label style="font-family: 'Denk One', sans-serif; font-size: 200%;">Name:</Label>
       <input style="font-family: 'Denk One', sans-serif; font-size: 200%;" type="text" id="name" name="name" placeholder="Name" required ><br>
       <Label style="font-family: 'Denk One', sans-serif; font-size: 200%;" >Email:</Label>
       <input style="font-family: 'Denk One', sans-serif; font-size: 200%;" type="text" id="email" name="email" placeholder="Email" required><br>
       <Label style="font-family: 'Denk One', sans-serif; font-size: 200%;" >Message:</Label>
       <input style="font-family: 'Denk One', sans-serif; font-size: 200%; width: 70%;" type="long-text" id="message" name="message" placeholder="Message"><br>
       <button style="font-family: 'Denk One', sans-serif; font-size: 200%;" class="btn" >Submit</button> 
     </form>
  </div>
<footer>
    <h1 id="rights">SOURABH CHOUDHARY (2021-2022) | @ All Rights Reserved</h1>
</footer>
</body>
</html>
