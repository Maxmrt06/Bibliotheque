<?php 
ob_start() ?>


<form method="POST" action="<?= URL ?>livres/validermodif" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titre">Titre du livre : </label>
    <input type="text" class="form-control" id="titre" name="titre" value="<?=$livre->getTitre() ?>">
  </div>
  <div class="form-group">
    <label for="auteur">Auteur du livre : </label>
    <input type="text" class="form-control" id="auteur" name="auteur" value="<?=$livre->getAuteur() ?>">
  </div>
  <div class="form-group">
    <label for="resume">Résumé du livre : </label>
    <input type="text" class="form-control" id="resume" name="resume" value="<?=$livre->getResume() ?>">
  </div>
  <div class="form-group">
    <label for="nbPages">Nombre de pages : </label>
    <input type="number" class="form-control" id="nbPages" name="nbPages" value="<?=$livre->getNbPages() ?>">
  </div>
  <h3>Image : </h3>
  <img src="<?= URL ?>public/images/<?= $livre->getImage() ?>">
  <div class="mb-3">
    <label for="image">Changer l'image : </label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <input type="hidden" name="identifiant" value="<?= $livre->getId(); ?>">
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
$titre = "Modification du livre : ".$livre->getTitre();
require "template.view.php";
?>