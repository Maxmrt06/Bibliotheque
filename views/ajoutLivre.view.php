<?php 
ob_start() 
?>
<form method="POST" action="<?= URL ?>livres/valider" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titre">Titre du livre : </label>
    <input type="text" class="form-control" id="titre" name="titre">
  </div>
  <div class="form-group">
    <label for="auteur">Auteur du livre : </label>
    <input type="text" class="form-control" id="auteur" name="auteur">
  </div>
  <div class="form-group">
    <label for="resume">Résumé du livre : </label>
    <input type="text" class="form-control" id="resume" name="resume">
  </div>
  <div class="form-group">
    <label for="nbPages">Nombre de pages : </label>
    <input type="number" class="form-control" id="nbPages" name="nbPages">
  </div>
  <div class="mb-3">
    <label for="image">Choisir une image : </label>
    <input type="file" class="form-control" id="image" name="image">
    <div class="invalid-feedback">Example invalid form file feedback</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Valider</button>
  
</form>


<?php
$content = ob_get_clean();
$titre = "Ajouter un livre";
require "template.view.php";
?>