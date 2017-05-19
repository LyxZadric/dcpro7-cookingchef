<nav class="main-menu">

    <a href="index.php">
        <img src="images/logo.png" alt="Cooking Chef" class="logo-nav">
    </a>

    <ul>
        <li><a href="#"><i class="fa fa-cutlery"></i> Recettes</a></li>
        <li><a href="#"><i class="fa fa-video-camera"></i> Vidéos</a></li>
        <li>
            <?php if (isset($current_user)) : ?>
                <a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a>
            <?php else : ?>
                <a href="admin/"><i class="fa fa-sign-in"></i> Log in</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>