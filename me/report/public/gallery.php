<?php
include('../config/config.php');

$title = 'Galleri';

include('../view/header.php');

$photos = [
    "Daisy" => "img/gallery/daisyCloseup.jpg",
    "Scilla" => "img/gallery/scillaCloseup.jpg",
    "Honey suckle" => "img/gallery/honeysuckleCloseup.jpg",
    "Lavender" => "img/gallery/lavender.jpg",
    "Plant" => "img/gallery/plant.jpg",
    "Grass" => "img/gallery/grass.jpg",
    "Trees" => "img/gallery/trees.jpg",
    "Hedge" => "img/gallery/hedge.jpg",
    "Weed" => "img/gallery/weed.jpg",
    "Deck" => "img/gallery/deck.jpg",
    "Generic" => "img/gallery/generic.jpg",
    "Spruce" => "img/gallery/spruceHigh.jpg",
];
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p>Här är ett galleri med foton från min trädgård.</p>

    <div class="gallery">
        <?php $counter = 0 ?>
        <?php foreach ($photos as $key => $value) : ?>
            <img src="<?= $value ?>" title="<?= $key ?>" alt="<?= $value ?>"  width="500" height="350">
            <?php if ($counter % 2) : ?>
                <div class="break"> </div>
            <?php endif; ?>
            <?php $counter += 1 ?> 
        <?php endforeach; ?>
    </div>
</main>

<?php include('../view/footer.php') ?>