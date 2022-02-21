<?php

require_once('connexion.php');

if (isset($_POST['name']) == false or empty($_POST['name'])) {
    echo 'Le nom est obligatoire !';
    exit;
}

$name = $_POST['name'];

//echo 'insert into category (name) values ("'.$name.'")';exit;

$result = $db->query('insert into category (name) values ("'.$name.'")');
