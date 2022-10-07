<?php

$user = checkIfUserLoggedIn();

?><nav>
    <a href="users.php">All users</a> | 

<?php if ($user) : ?>
    Logged in as '<?= $user ?> '
    <a href="user.php">Profile</a> | 
    <a href="logout_process.php">Logout</a> | 
<?php else : ?>
    <a href="login.php">Login</a>
<?php endif; ?>

</nav>
