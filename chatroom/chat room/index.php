<?php 
session_start();
if(isset($_SESSION["userName"]) && 
isset($_SESSION["phone"]) ){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatRoom
    </title> 
    <link rel="Stylesheet" href="css/style.css">
</head>
<body>
    <h1> chatRoom</h1>
    <div class="chat">
        <h2>welcome to <span><?= $_SESSION["userName"]?></span> </h2>
        <div class="msg">
             
             

        </div>
        <div class="input_msg">
            <input type ="text"placeholder="write Msg Here" id="input_msg">
            <button onclick="update()">send</button>
        </div>

    </div>
</body>
<script src="js/script.js"> </script>
</html>

<?php
}
else{
    header("location: login.php"); 

}
?>