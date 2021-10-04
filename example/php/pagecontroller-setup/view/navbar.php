<?php

/**
 * A template file, to use when rendering a view.
 * Use as little as possible logic here, only render the
 * variables that are "sent" to the view. Programming logic
 * should be done in the page controller.
 */

$items = [
    "Page controller" => "page-controller.php",
    "HTML part" => "html.php",
    "Markdown"  => "markdown.php",
    "Layout"    => "layout.php",
    "Views"     => "views.php",
    "Debug"     => "debug.php",
];

$curPage = basename($_SERVER["REQUEST_URI"]);


?><nav>
<?php foreach ($items as $key => $val) :
    $selected = ($curPage === $val) ? "selected" : null;
    ?>
    <a class="<?= $selected ?>" href="<?= $val ?>"><?= $key ?></a>
<?php endforeach; ?>
</nav>
