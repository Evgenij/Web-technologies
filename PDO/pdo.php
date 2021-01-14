<?php

$driver = 'mysql';
$host = 'localhost';
$dbName = 'posts';
$dbUser = 'root';
$dbPassword = 'root';
$charset = 'utf8';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];


try{
    $db = new PDO(
        "$driver:host=$host;dbname=$dbName;charset=$charset",$dbUser,$dbPassword,$options);

}catch(PDOException $e){
    die("Не удалось подключиться к базе данных..." . $e->getMessage());
}

$result = $db->query('SELECT * FROM posts');

/* while($row = $result->fetch(PDO::FETCH_BOTH)){
    echo $row['title'];
} */

$sql= 'SELECT * FROM posts WHERE id_user = :idUser';
$tempSql = $db->prepare($sql);
$params = [':idUser' => '1'];
$tempSql->execute($params);

while ($row = $tempSql->fetch(PDO::FETCH_BOTH)) {
    echo $row['title'];
}