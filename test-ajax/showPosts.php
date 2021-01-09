<?php
    include "connect.php"; //Подключаем БД
    //делаем запрос на товары этой категории
    $query = "SELECT posts.id, posts.title, posts.text, users.login FROM posts INNER JOIN users ON users.id = posts.id_user WHERE users.id = " . $_POST['idUser'] . "";

    $result = mysqli_query($connect, $query);

    // выводим товары полученные по запросу
    while ($row = mysqli_fetch_array($result)) {
        print '<div class="post">';
        print '<header class="title-post">' . $row[1] . '</header>';
        print '<p class="text-post">'.$row[2].'</p>';
        print '<span class="user-post">'.$row[3].'</span>';
        print '</div>';
    }
