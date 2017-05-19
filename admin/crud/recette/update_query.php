<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';

$id = $_POST["id"];
$titre = $_POST["titre"];
$description_courte = $_POST["description_courte"];
$description = $_POST["description"];
$nb_personnes = $_POST["nb_personnes"];
$categorie = $_POST["categorie"];

if ($_FILES["image"]["name"] != "") {
    // Upload de la nouvelle image
    $image = $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . "/../../../images/" . $image);
} else {
    // Le nom de l'image ne change pas
    $recette = getRecette($id);
    $image = $recette["image"];
}


updateRecette($id, $titre, $image, $description_courte, $description, $nb_personnes, $categorie);

header("Location: index.php");