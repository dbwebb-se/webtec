<?php

/**
 * A template file, to use when rendering a view.
 * Use as little as possible logic here, only render the
 * variables that are "sent" to the view. Programming logic
 * should be done in the page controller.
 */

$title = $title ?? null;
$items = $items ?? [];



?><h4><?= esc($title) ?></h4>
<?php foreach ($items as $key => $val) : ?>
    <li><a href="<?= $val ?>"><?= $key ?></a></li>
<?php endforeach; ?>
</ul>
