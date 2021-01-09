<?php

include "./connect.php";

$output = [];
$ext = [];

if (!isset($_FILES['file']['name'][0])) {
    echo 'error';
} else {
    foreach ($_FILES['file']['name'] as $key => $fileName) {
        if (move_uploaded_file($_FILES['file']['tmp_name'][$key], 'uploads/' . $fileName)) {
            $output[] = 'uploads/' . $fileName;
            $ext[] = getExtension($fileName);

            $smallFileName = '';
            if (strlen($fileName) >= 15) {
                $smallFileName = substr($fileName, 0, 4) . '...'  .  
                substr($fileName, strlen($fileName) - strlen(getExtension($fileName))*2, strlen(getExtension($fileName))) . 
                getExtension($fileName);
            } else {
                $smallFileName = $fileName;
            }

            echo '<div class="file">';
            echo '<div class="btn-close"></div>';
            echo '<img src="./icons_files/' . getExtension($fileName) . '.svg" alt="' . $fileName . '" title = "' . $fileName . '" class="file__icon">';
            echo '<p class="file__name" title = "' . $fileName . '"> ' . $smallFileName . '</p>';
            echo '</div>';
        }
    }

    /* foreach ($ext as $val) {
        echo $val;
    } */

    /* foreach ($output as $value) {
        mysqli_query($connect, "INSERT INTO `file` (`path`) VALUES ('$value')");
    } */
}

function getExtension($filename)
{
    return substr(strrchr($filename, '.'), 1);
}
