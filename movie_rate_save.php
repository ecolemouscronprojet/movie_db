<?php

require_once('connexion.php');

$movieId = $_GET['movie_id'];

$rating = $_POST['rating'] ?? null;

$comment = $_POST['comment'] ?? null;


$query = $db->query('insert into rate (`rating`, `comment`, `movie_id`) values (' . $rating . ', "' . $comment . '", ' . $movieId . ')');

if ($query == false) {
    echo 'Une erreur s\'est produite, veuillez réessayer plus tard !';
    exit;
}

header('location: movie_edit.php?id='.$movieId);
