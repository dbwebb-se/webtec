<?php
include('../config/config.php');

$title = 'Om kurs och webbplatsen';

include('../view/header.php');
?>

<div class="two-col-layout">
    <main class="main">
        <article class="article">

            <h1>Om kursen och webbplatsen</h1>
            <p>Här tänkte jag skriva lite om denna webbplatsen och om kursen. Denna webbplatsen innehåller allt material som jag producerat under kursen.</p>
            <p>Här följer en representativ bild för denna kursen.</p>

            <figure class="figure center">
                <img src="img/background.jpg" width="700" alt="Bild på mig Mikaels arbetsbord.">
                <figcaption>Mikaels arbetsmiljö.</figcaption>
            </figure>

        </article>
    </main>

    <aside class="aside">
        <h4>Kursen webtec</h4>

        <p>Kursen handlar om att komma igång med några av de olika teknologier som används för att bygga databasdrivna webbplatser.</p>

        <h4>Kursrepo</h4>

        <p>Kursen har ett <a href="https://github.com/dbwebb-se/webtec">kursrepo på GitHub</a> med exempelprogram och issues där man kan ställa frågor och få utförliga svar.</p>
    </aside>
</div>

<?php include('../view/footer.php') ?>
