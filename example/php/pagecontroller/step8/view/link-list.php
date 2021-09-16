<?php

$items = $items ?? [];



?><ul>
<?php foreach ($items as $key => $val) : ?>
    <li><a href="<?= $val ?>"><?= $key ?></a></li>
<?php endforeach; ?>
</ul>
