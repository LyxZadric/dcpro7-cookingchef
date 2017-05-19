<article>
    <a href="recipe.php?id=<?php echo $recette["id"]; ?>">
        <img src="images/<?php echo $recette["image"]; ?>" alt="<?php echo $recette["titre"]; ?>" class="img-responsive">
    </a>
    <h2><a href="recipe.php?id=<?php echo $recette["id"]; ?>"><?php echo $recette["titre"]; ?></a></h2>
    <?php echo $recette["description_courte"]; ?>
    <footer>
        <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> <?php echo $recette["nb_likes"]; ?></div>
        <div class="label"><i class="fa fa-cutlery"></i> <?php echo $recette["categorie"]; ?></div>
        <div class="label"><i class="fa fa-user"></i> <?php echo $recette["username"]; ?></div>
        <div class="label"><i class="fa fa-calendar"></i> <?php echo $recette["date_creation_format"]; ?></div>
    </footer>
</article>
