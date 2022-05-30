<?php
require_once('connexion.php');

$movie_id = $_GET['movie_id'] ?? null;
$category_id = $_GET['category_id'] ?? null;

if ($movie_id == null | $category_id == null) {
    header('location: movie_list.php');
}


$query = $db->query("delete from category_movie where movie_id=$movie_id and category_id=$category_id");

if ($query == false) {
    echo 'Une erreur s\'est produite, veuillez réessayer plus tard !';
    exit;
}

if ($query->rowCount() != 1) {
    echo 'Cet enregistrement n\'existe pas';
    exit;
}

header('location: movie_edit.php?id=' . $movie_id);
