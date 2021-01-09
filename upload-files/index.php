<?php
include "./connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Upload files</title>
</head>

<body>
    <h1 style="margin: auto; margin: 40px 0px;" align="center">Загрузка файлов на сервер</h1>
    <div class="area-files">Перетащите файлы или загрузите</div>
    <div class="uploaded-files">
        <div class="file">
            <div class="btn-close"></div>
            <img src="/icons_files/cs.svg" alt="" title="" class="file__icon">
            <p class="file__name" title="">name.cs</p>
        </div>
    </div>
    <button type="button" class="">Отправить файлы</button>

    <script src="scripts/jquery-3.5.1.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>