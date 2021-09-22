<?php

/**
 * A template file, to use when rendering a view.
 */



?><hr>

<h2>DEBUG IT</h2>

<p>The value of <code>var_dump($_COOKIE["my_name_is"])</code> is show below.</p>

<pre>
<?= esc(print_r($_COOKIE["my_name_is"] ?? null, true)) ?>
</pre>

<p>The array $_COOKIE contains the following.</p>

<pre>
<?= esc(print_r($_COOKIE, true)) ?>
</pre>
