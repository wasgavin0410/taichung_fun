<?php

    include "connect.php";
    $user_name = $_POST['user'];
    $visit_place = $_POST['place'];
    $comment  = $_POST['comment'];
    $date = date('Y-m-d');

    $SQL = "INSERT INTO taichung(user_name, visit_place, comment, time) 
        VALUES ('$user_name' , '$visit_place', '$comment', '$date')";
 
    if ($taichungchat_db -> query($SQL) === TRUE){
        //SQL command has been completed in IF statement
        //mysqli_query($taichungchat_db, $SQL);  NO NEED
        header("Location: message_board.php");
    }else{
        echo "ERROR";
        die(mysqli_error($taichungchat_db));
    }

    $taichungchat_db -> close();


?>