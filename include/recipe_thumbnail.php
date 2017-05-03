<article>
    <a href="recipe.php?id=<?php echo $recette["id"]; ?>">
        <img src="images/<?php echo $recette["img"]; ?>" alt="<?php echo $recette["title"]; ?>" class="img-responsive">
    </a>
    <h2><a href="recipe.php?id=<?php echo $recette["id"]; ?>"><?php echo $recette["title"]; ?></a></h2>
    <?php echo $recette["description"]; ?>
    <footer>
        <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> <?php echo $recette["nb_like"]; ?></div>
        <div class="label"><i class="fa fa-cutlery"></i> <?php echo $recette["category"]; ?></div>
        <div class="label"><i class="fa fa-user"></i> <?php echo $recette["user"]; ?></div>
        <div class="label"><i class="fa fa-calendar"></i> <?php echo $recette["creationDate"]->format("j M Y"); ?></div>
    </footer>
</article>
