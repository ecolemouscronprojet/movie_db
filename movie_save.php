<?php

require_once('connexion.php');

function validation($key, $message){
    if (isset($_POST[$key]) == false  || empty($_POST[$key])) {
        echo $message;
        exit;
    }
}

validation('name', 'Nom obligatoire');
validation('release', 'Release obligatoire');
validation('duration', 'Durée obligatoire');

$movie = $_POST;

$query = $db->query('insert into movie (`name`, `release`, `duration`) values ("'.$movie['name'].'", "'.$movie['release'].'", '.$movie['duration'].')');

header('location: movie_list.php');
