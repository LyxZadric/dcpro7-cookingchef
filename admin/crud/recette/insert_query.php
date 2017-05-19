<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$image = $_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . "/../../../images/" . $image);

$titre = $_POST["titre"];
$description_courte = $_POST["description_courte"];
$description = $_POST["description"];
$nb_personnes = $_POST["nb_personnes"];
$categorie = $_POST["categorie"];

insertRecette($titre, $image, $description_courte, $description, $nb_personnes, $current_user["id"], $categorie);

header("Location: index.php");