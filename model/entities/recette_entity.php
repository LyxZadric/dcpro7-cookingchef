<?php

function getAllRecettes($limit = 99999) {
    global $connection;

    $query = "
        SELECT
            recette.id,
            recette.titre,
            recette.description_courte,
            recette.image,
            recette.date_creation,
            DATE_FORMAT(recette.date_creation, '%e %M %Y') AS date_creation_format,
            recette.nb_personnes,
            utilisateur.nom AS utilisateur_nom,
            utilisateur.prenom AS utilisateur_prenom,
            CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom, 1), '.') AS username,
            categorie.libelle AS categorie,
            COUNT(utilisateur_like_recette.utilisateur_id) AS nb_likes
        FROM recette
        INNER JOIN utilisateur ON utilisateur.id = recette.utilisateur_id
        INNER JOIN categorie ON categorie.id = recette.categorie_id
        LEFT JOIN utilisateur_like_recette ON utilisateur_like_recette.recette_id = recette.id
        GROUP BY recette.id
        ORDER BY recette.date_creation DESC
        LIMIT :limit;
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}
function getAllArticlesByCategorie($id) {
    global $connection;

    $query = "
        SELECT
            article.id,
            article.titre,
            article.image,
            article.date_creation,
            DATE_FORMAT(article.date_creation, '%e %M %Y à %H:%i') AS date_creation_format,
            CONCAT(utilisateur.prenom, ' ', utilisateur.nom) AS utilisateur
        FROM article
        INNER JOIN categorie ON categorie.id = article.categorie_id
        INNER JOIN utilisateur ON utilisateur.id = article.utilisateur_id
        WHERE categorie.id = :id
        ORDER BY article.date_creation DESC;
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getRecette($id) {
    global $connection;

    $query = "
        SELECT
            recette.id,
            recette.titre,
            recette.description,
            recette.description_courte,
            recette.image,
            recette.date_creation,
            DATE_FORMAT(recette.date_creation, '%e %M %Y') AS date_creation_format,
            recette.nb_personnes,
            utilisateur.nom AS utilisateur_nom,
            utilisateur.prenom AS utilisateur_prenom,
            CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom, 1), '.') AS username,
            recette.categorie_id,
            categorie.libelle AS categorie,
            COUNT(utilisateur_like_recette.utilisateur_id) AS nb_likes
        FROM recette
        INNER JOIN utilisateur ON utilisateur.id = recette.utilisateur_id
        INNER JOIN categorie ON categorie.id = recette.categorie_id
        LEFT JOIN utilisateur_like_recette ON utilisateur_like_recette.recette_id = recette.id
        WHERE recette.id = :id
        GROUP BY recette.id;
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertRecette($titre, $image, $description_courte, $description, $nb_personnes, $utilisateur_id, $categorie_id) {
    global $connection;

    $query = "INSERT INTO recette (titre, image, description_courte, description, nb_personnes, date_creation, utilisateur_id, categorie_id) VALUES (:titre, :image, :description_courte, :description, :nb_personnes, NOW(), :utilisateur_id, :categorie_id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":nb_personnes", $nb_personnes);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->execute();
}

function updateRecette($id, $titre, $image, $description_courte, $description, $nb_personnes, $categorie_id) {
    global $connection;

    $query = "UPDATE recette SET
                titre = :titre,
                image = :image,
                description_courte = :description_courte,
                description = :description,
                nb_personnes = :nb_personnes,
                categorie_id = :categorie_id 
            WHERE id = :id
    ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":nb_personnes", $nb_personnes);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

function deleteRecette($id) {
    global $connection;

    $query = "DELETE FROM recette WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}