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


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cooking Chef</title>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/flexboxgrid.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

        <header class="header-home">
            <div class="overlay">

                <nav class="main-menu">

                    <a href="index.php">
                        <img src="images/logo.png" alt="Cooking Chef" class="logo-nav">
                    </a>

                    <ul>
                        <li><a href="#"><i class="fa fa-cutlery"></i> Recettes</a></li>
                        <li><a href="#"><i class="fa fa-video-camera"></i> Vidéos</a></li>
                        <li><a href="#"><i class="fa fa-sign-in"></i> Log in</a></li>
                    </ul>
                </nav>

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

                <div class="col-md-4">
                    <article>
                        <a href="recipe-1.html">
                            <img src="images/<?php echo $liste_recettes[0]["img"]; ?>" alt="<?php echo $liste_recettes[0]["title"]; ?>" class="img-responsive">
                        </a>
                        <h2><a href="recipe-1.html"><?php echo $liste_recettes[0]["title"]; ?></a></h2>
                        <?php echo $liste_recettes[0]["description"]; ?>
                        <footer>
                            <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> <?php echo $liste_recettes[0]["nb_like"]; ?></div>
                            <div class="label"><i class="fa fa-cutlery"></i> <?php echo $liste_recettes[0]["category"]; ?></div>
                            <div class="label"><i class="fa fa-user"></i> <?php echo $liste_recettes[0]["user"]; ?></div>
                            <div class="label"><i class="fa fa-calendar"></i> <?php echo $liste_recettes[0]["creationDate"]->format("j M Y"); ?></div>
                        </footer>
                    </article>
                </div>

                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <img src="images/recipe-2.jpg" alt="Poulet mariné" class="img-responsive">
                        </a>
                        <h2><a href="#">Pancake chocolat banane</a></h2>
                        Délicieux pancake à la banane et au chocolat.
                        <footer>
                            <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> 42</div>
                            <div class="label"><i class="fa fa-cutlery"></i> Desert</div>
                            <div class="label"><i class="fa fa-user"></i> Etienne H.</div>
                            <div class="label"><i class="fa fa-calendar"></i> 12 Sept. 2016</div>
                        </footer>
                    </article>
                </div>

                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <img src="images/recipe-3.jpg" alt="Poulet mariné" class="img-responsive">
                        </a>
                        <h2><a href="#">Poulet mariné</a></h2>
                        Recette classique du poulet mariné...
                        <footer>
                            <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> 42</div>
                            <div class="label"><i class="fa fa-cutlery"></i> Desert</div>
                            <div class="label"><i class="fa fa-user"></i> Etienne H.</div>
                            <div class="label"><i class="fa fa-calendar"></i> 12 Sept. 2016</div>
                        </footer>
                    </article>
                </div>

                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <img src="images/recipe-4.jpg" alt="Poulet mariné" class="img-responsive">
                        </a>
                        <h2><a href="#">Poulet mariné</a></h2>
                        Recette classique du poulet mariné...
                        <footer>
                            <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> 42</div>
                            <div class="label"><i class="fa fa-cutlery"></i> Desert</div>
                            <div class="label"><i class="fa fa-user"></i> Etienne H.</div>
                            <div class="label"><i class="fa fa-calendar"></i> 12 Sept. 2016</div>
                        </footer>
                    </article>
                </div>

            </section>

        </main>

        <footer class="site-footer">
            © Cooking Chef 2016
        </footer>

    </body>
</html>
