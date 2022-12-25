<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=dersler','root','a1b2c3Ahmet.');
} catch (PDOException $e){
    echo $e->getMessage();
}




?>