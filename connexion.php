<?php

$user = 'root';
$pass = 'root';

try {
    $db = new PDO('mysql:host=127.0.0.1;port=3306;dbname=movie_db', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
