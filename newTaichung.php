
<!DOCTYPE html>
<html>
<title>台中景點走透透</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bg_slideshow.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet"> 


<style>

    
    head, body, h2, h3 {font-family: 'Noto Sans TC', sans-serif;}

    body, html {
        height: 90%;
        line-height: 1.8;
    }

    .w3-bar .w3-button {
        padding: 16px;
    }

    .showingpanel{
        margin-top: 65px;
        width: 80%;
        height: 60%;
        overflow: auto;
    }

    .showingpanel input, button{
        width: 100%;
        margin-bottom: 10px;
    }



</style>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="newTaichung.php">
        <img src="logo.png" style="height:min-content;" class="w3-bar-item w3-button w3-wide"></img>
    </a>
    
    <!-- Right-side -->
    <div class="w3-display-right">
      <a href="message_board.php" class="w3-bar-item w3-button w3-diplay-middle">MESSAGE BOARD</a>
      <a href="teams.html" class="w3-bar-item w3-button"> TEAM</a>
    </div>

  </div>
</div>



<body>
    
    <ul class="cb-slideshow w3-opacity">
        
        <li>
            <span>Image 1</span>
        </li>

        <li>
            <span>Image 2</span>
        </li>

        <li>
            <span>Image 3</span>
        </li>
    </ul>

    <div class="showingpanel w3-panel w3-border w3-pale-blue w3-round-large w3-display-middle">
        <h3 class="w3-animate-bottom">
            今天，想去哪裡散散心？
        </h3>

        <form class="w3-animate-bottom" name="visit" method="GET" action="show_by_township.php">
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="北區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="北屯區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="中區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="西區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="西屯區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="南區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="南屯區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="東區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="后里區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="和平區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="外埔區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="大安區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="大甲區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="大肚區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="大里區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="大雅區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="太平區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="新社區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="東勢區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="梧棲區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="沙鹿區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="清水區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="潭子區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="烏日區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="石岡區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="神岡區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="豐原區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="霧峰區"></input>
            <input type="submit" class="w3-button w3-white w3-border w3-border-red w3-round-large" name="township" value="龍井區"></input>
        </form>

    </div>
</body>
