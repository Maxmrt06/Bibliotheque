<?php 
ob_start() ?>

<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/images/<?= $livre->getImage(); ?>">
    </div>
    <div class="col-6">
        <p>Titre : <?= $livre->getTitre(); ?></p>
        <p>Auteur : <?= $livre->getAuteur(); ?></p>
        <p>Résumé : <?= $livre->getResume(); ?></p>
        <p>Nombre de pages : <?= $livre->getNbPages(); ?></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = $livre->getTitre();
require "template.view.php";
?>