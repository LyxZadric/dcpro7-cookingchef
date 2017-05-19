<?php
require_once 'model/database.php';

$id = $_GET["id"];
$recette = getRecette($id);
$liste_ingredients = getAllIngredientsByRecette($id);

require_once 'layout/header.php';
?>

<header>

    <?php require_once 'layout/menu.php'; ?>

</header>

<main class="container">

    <section class="row">
        <div class="col-md-4">
            <img src="images/<?php echo $recette["image"]; ?>" alt="<?php echo $recette["title"]; ?>" class="img-responsive">
        </div>
        <div class="col-md-4">
            <h1><?php echo $recette["titre"]; ?></h1>
            <p><?php echo $recette["description"]; ?></p>
        </div>
        <div class="col-md-4">
            <h2>Ingrédients</h2>
            <ul>
                <?php foreach ($liste_ingredients as $ingredient) : ?>
                <li><?php echo $ingredient["libelle"]; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

        <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> <?php echo $recette["nb_likes"]; ?></div>
        <div class="label"><i class="fa fa-cutlery"></i> <?php echo $recette["categorie"]; ?></div>
        <div class="label"><i class="fa fa-user"></i> <?php echo $recette["username"]; ?></div>
        <div class="label"><i class="fa fa-calendar"></i> <?php echo $recette["date_creation_format"]; ?></div>

</main>

<?php require_once 'layout/footer.php'; ?>
