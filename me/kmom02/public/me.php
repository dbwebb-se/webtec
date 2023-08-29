<?php include('../config/config.php');

$title = 'Om kurs och webbplatsen';

// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');

include('../view/header.php');
?>

<main class="main">
    <article class="article">
        <header>
            <h1>Om Mig Själv</h1>
            <p class="author">Skriven av Mikael Roos, uppdaterad <time datetime="2022-06-29">2022-06-29</time>.</p>
        </header>

        <figure class="figure right">
            <img src="img/me.png" width="300" alt="Bild på mig">
            </figcaption>Mikael Roos</figcaption>
        </figure>

        <p>Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig.
            Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig.
            Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig.
            Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig.
            Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig. Text om mig.
        </p>

        <footer class="byline">
            En byline. En byline. En byline. En byline. En byline. En byline. En byline.
            <figure class="figure left">
                <img src="img/me_small.jpg" width="80" alt="Bild på mig">
            </figure>
        </footer>
    </article>
</main>

<?php include('../view/footer.php') ?>