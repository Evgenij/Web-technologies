<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Document</title>
</head>

<body>
    <form action="">
        <select name="list-users" id="list-users">
            <?php
            include "show_users.php";
            ?>
        </select>
    </form>

    <div class="content">
    </div>

    <script src="scripts/jquery-3.5.1.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>