<?php
    $result  =  mysqli_query($connect,  "SELECT * FROM users");

    if (!$result) {
        echo "Произошла ошибка: "  .  mysqli_error($connect);
    }
    else{
        //Данные получены
        while ($row=mysqli_fetch_array($result))
        {
            print "<option value=".$row[0].">";
            print $row[1];
            echo("</option>");
        }
    }
