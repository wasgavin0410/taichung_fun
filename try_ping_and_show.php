

    <?php
            include "connect_taichung_chat.php";

            $read_sql = "SELECT * from taichung";
            $read_result = $taichungchat_db -> query($read_sql);

            while ($row = $read_result -> fetch_assoc()){
                //read each of lines from database
                echo '<div class="w3-container w3-panel w3-aqua w3-round">';
                echo '<span style="color:gray">使用者名稱：</span>'.$row['user_name'].'<br>';
                echo '<span style="color:gray">拜訪地點  ：</span>'.$row['visit_place'].'<br>';
                echo '<span style="color:gray">本次心得  ：</span><br>'.$row['comment'].'<br>';
                echo '<span style="color:gray">上傳日期  ：</span>'.$row['time'].'<br>';
                echo '</div>';
            }

            //dont forget to use OOP! do not use $taichungchat_db.close()
            //$taichungchat_db -> close();
        ?>

