<!DOCTYPE html>
<html>
    <title>台中景點走透透  留言板</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="taichung_mb.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet"> 
    
</html> 

<head>

    <style>
        head, body {font-family: 'Noto Sans TC', sans-serif;}
    </style>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="newTaichung.php">
            <img src="logo.png" style="height:min-content;" class="w3-bar-item w3-button w3-wide"></img>
        </a>
        
        <!-- Right-side -->
        <div class="w3-display-right">
            <a href="" class="w3-bar-item w3-button w3-diplay-middle">MESSAGE BOARD</a>
            <a href="teams.html" class="w3-bar-item w3-button"> TEAM</a>
        </div>
    
        </div>
    </div>

    <?php
        include "try_ping_and_show.php";
    ?>
    
</head>

<body class ="w3-row w3-padding-64 w3-light-blue">

    <form class="w3-container w3-panel w3-aqua w3-round" method="POST" action="send_form.php">
        <br>
         <p>
            使用者名稱 : 
            <label for="user"></label>
            <input type="text" name="user" id="user">
            <br>
        </p>
        <p>
            參觀地點   :
            <label for="place"></label>
            <input type="text" name="place" id="place">
            <br>
        </p>
        <p>
            本次心得   :
            <label for="comment"></label>
            <textarea name="comment" id="comment" cols="45" rows="5"></textarea>
        </p>

        <button class="w3-button w3-round-xlarge w3-black" type="submit" value="submit">Submit</button>
        <br><br><br>
    </form>

    

</body>