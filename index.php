<?php
require_once 'model/database.php';
$liste_recettes = getAllRecettes(3);
$nb_recettes = countTable("recette");

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
        Parcourez nos <?php echo $nb_recettes; ?> recettes...
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