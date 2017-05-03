<?php

function getAllRecettes() {
    $liste_recettes = array();

    $liste_recettes[0] = array(
        "title" => "Poulet mariné",
        "img" => "recipe-1.jpg",
        "description" => "Recette classique du poulet mariné...",
        "nb_like" => 12,
        "category" => "Plat",
        "user" => "François P.",
        "creationDate" => new DateTime("2016-09-12")
    );

    $liste_recettes[1] = array(
        "title" => "Pancake chocolat banane",
        "img" => "recipe-2.jpg",
        "description" => "Délicieux pancake à la banane et au chocolat.",
        "nb_like" => 42,
        "category" => "Desert",
        "user" => "Etienne H.",
        "creationDate" => new DateTime("2016-09-10")
    );

    $liste_recettes[2] = array(
        "title" => "Saumon Teriyaki",
        "img" => "recipe-3.jpg",
        "description" => "C'est bon le saumon :)",
        "nb_like" => 95,
        "category" => "Plat",
        "user" => "François P.",
        "creationDate" => new DateTime("2016-09-13")
    );
    
    return $liste_recettes;
}
