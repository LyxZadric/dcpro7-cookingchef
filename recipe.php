<?php require_once 'layout/header.php'; ?>

<header>

    <?php require_once 'layout/menu.php'; ?>

</header>

<main class="container">

    <section class="row">
        <div class="col-md-4">
            <img src="images/recipe-1.jpg" alt="Poulet mariné" class="img-responsive">
        </div>
        <div class="col-md-4">
            <h1>Poulet mariné</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, incidunt perspiciatis nisi rem natus beatae maiores recusandae illum aliquid. Animi, quisquam ut amet inventore qui, magnam cum iure magni voluptas?
            </p>
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

    <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> 42</div>
    <div class="label"><i class="fa fa-cutlery"></i> Desert</div>
    <div class="label"><i class="fa fa-user"></i> Etienne H.</div>
    <div class="label"><i class="fa fa-calendar"></i> 12 Sept. 2016</div>

</main>

<?php require_once 'layout/footer.php'; ?>
