<?php
        //gitignore

        $township = $_GET['township'];

        include "connect_taichung_spots.php";


        $SQL_search = "SELECT * FROM taichung_spots WHERE township='$township'";

        $result = $taichung_spots->query($SQL_search);
        if ($result-> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                        echo $row['spot_name']."<br>";
                        echo $row['summary']."<br><br><br>";
                }
        }else{
                echo "no result";
        }

        $taichung_spots -> close();
?>