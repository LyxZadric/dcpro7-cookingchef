<?php
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

require_once 'layout/header.php';
?>

<header class="header-home">
    <div class="overlay">

        <?php require_once 'layout/menu.php'; ?>

        <div class="container">
            <img src="images/logo.png" alt="Cooking Chef">
            <form>
                <input type="text" placeholder="Recette">
                <select>
                    <option disabled selected>Catégorie</option>
                    <option>Entrée</option>
                    <option>Plat</option>
                    <option>Dessert</option>
                </select>
                <input type="submit" value="Rechercher">
            </form>
            <p>Cooking chef est le site internet pour Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis fugit, quae veniam culpa nam harum sed qui, libero obcaecati enim praesentium est id consequatur voluptatem doloribus perspiciatis saepe ratione at!</p>
        </div>

    </div>

</header>

<main class="container container-home">

    <h1>Découvrez nos dernières recettes Cooking Chef !</h1>
    <p>
        Parcourez nos 284 recettes...
    </p>

    <section class="row recipes">

        <?php foreach ($liste_recettes as $recette) : ?>
            <div class="col-md-4">
                <?php include 'include/recipe_thumbnail.php'; ?>
            </div>
        <?php endforeach; ?>

    </section>

</main>

<?php require_once 'layout/footer.php'; ?>