<?php

require_once('connexion.php');
$id = $_GET['id'] ?? null;

if (isset($_POST['name']) == false or empty($_POST['name'])) {
    echo 'Le nom est obligatoire !';
    exit;
}

$name = $_POST['name'];

if($id != null) {
    $query = $db->query("update category set name='$name' where id=$id");
} else {
    $query = $db->query('insert into category (name) values ("'.$name.'")');
}


header('location: category_list.php');