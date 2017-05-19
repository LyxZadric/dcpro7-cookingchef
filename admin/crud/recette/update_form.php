<?php
require_once __DIR__ . '/../../security.php';
require_once __DIR__ . '/../../../model/database.php';
require_once __DIR__ . '/../../layout/header.php';

$id = $_GET["id"];
$recette = getRecette($id);
$liste_categories = getAllCategories();
?>

<h1>Modifier une recette</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputTitre">Titre</label>
        <input type="text" name="titre" value="<?php echo $recette["titre"]; ?>" class="form-control" id="inputTitre" placeholder="Titre">
    </div>
    <div class="form-group">
        <label for="inputImage">Image</label>
        <input type="file" name="image" class="form-control" id="inputImage">
        <img src="<?php echo $website_root ?>images/<?php echo $recette["image"]; ?>" class="img-thumbnail">
    </div>
    <div class="form-group">
        <label for="inputDescriptionCourte">Description Courte</label>
        <textarea name="description_courte" class="form-control" id="inputDescriptionCourte"><?php echo $recette["description_courte"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="inputDescription">Description</label>
        <textarea name="description" class="form-control" id="inputDescription"><?php echo $recette["description"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="inputNbPersonnes">Nombre de personnes</label>
        <input type="number" name="nb_personnes" value="<?php echo $recette["nb_personnes"]; ?>" class="form-control" id="inputNbPersonnes">
    </div>
    <div class="form-group">
        <label for="categorie">Catégorie</label>
        <select name="categorie" class="form-control" id="categorie">
            <?php foreach ($liste_categories as $categorie) : ?>
            <option value="<?php echo $categorie["id"]; ?>" <?php if ($categorie["id"] == $recette["categorie_id"]) : ?>selected<?php endif; ?>>
                <?php echo $categorie["libelle"]; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="hidden" name="id" value="<?php echo $recette["id"]; ?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>