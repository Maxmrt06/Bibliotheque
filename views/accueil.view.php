<?php 
ob_start() ?>

<div class="card border-info mb-3">
  <div class="card-header">Sommaire</div>
  <div class="card-body">
    <h4 class="card-title"><a href="<?= URL ?>livres"?>Cliquez ici pour découvrir mes livres préféres</a></h4>
    <p class="card-text">Voici quelques un des livres que j'ai apprécié</p>
  </div>
</div>


<?php
$content = ob_get_clean();
$titre = "Ma bibliothèque";
require "template.view.php";
?>