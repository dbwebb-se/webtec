<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

 $message = "Hej världen!";

?>



<h2>Hello world</h2>

<p>
    PHP säger: <strong><?= $message ?></strong>
</p>


