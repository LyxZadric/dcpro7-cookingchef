<?php
require_once 'model/database.php';

$id = $_GET["id"];
$recette = getRecette($id);

require_once 'layout/header.php';
?>

<header>

    <?php require_once 'layout/menu.php'; ?>

</header>

<main class="container">

    <section class="row">
        <div class="col-md-4">
            <img src="images/<?php echo $recette["img"]; ?>" alt="<?php echo $recette["title"]; ?>" class="img-responsive">
        </div>
        <div class="col-md-4">
            <h1><?php echo $recette["title"]; ?></h1>
            <p><?php echo $recette["description"]; ?></p>
        </div>
        <div class="col-md-4">
            <h2>Ingrédients</h2>
            <ul>
                <li>Poulet</li>
                <li>Ciboulette</li>
                <li>Soja</li>
            </ul>
        </div>
    </section>

        <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> <?php echo $recette["nb_like"]; ?></div>
        <div class="label"><i class="fa fa-cutlery"></i> <?php echo $recette["category"]; ?></div>
        <div class="label"><i class="fa fa-user"></i> <?php echo $recette["user"]; ?></div>
        <div class="label"><i class="fa fa-calendar"></i> <?php echo $recette["creationDate"]->format("j M Y"); ?></div>

</main>

<?php require_once 'layout/footer.php'; ?>
