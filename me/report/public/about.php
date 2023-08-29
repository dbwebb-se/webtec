<?php include('../config/config.php');

$title = 'Om kurs och webbplatsen';

include('../view/header.php');
?>

<div class="two-col-layout">
    <main class="main">
        <article class="article">
            <header>
                <h1>Om kursen och webbplatsen</h1>
            </header>

            <p>Kursen Webbteknologier, a.k.a. webtec, är en introduktionskurs för den som vill lära sig 
                teknikerna från grunden. Kursen kräver inga förkunskaper och hanterar helheten kring en 
                webbapplikation. Till att börja med fokuserar vi på HTML och CSS. Vi använder HTML5 och 
                tittar på vilka möjligheter som CSS3 kommer att erbjuda.</p>

            <p>Därefter introduceras PHP som ett skriptspråk och med enkla programmeringskonstruktioner 
                får vi möjlighet att bygga ut vår webbplats på ett strukturerat sätt. Vi fortsätter med 
                att lagra information i en filbaserad databas (SQLite) via PHP’s gränssnitt PHP Data Objekt. 
                Vi använder på frågespråket SQL och lär oss de grundläggande konstruktionerna.</p>

            <figure class="figure center">
                <img src="img/background.jpg" alt="Bild på mig">
                </figcaption>Mikaels arbetsplats</figcaption>
            </figure>
        </article>
    </main>

    <aside class="aside">
        <h4>Kursen webtec</h4>

        <p>Kursen webtec lär ut webbutveckling där teknikerna HTML, CSS, PHP 
                och SQL används för att tillsammans bygga en databasdriven webbplats.</p>
        
        <h4>Kursrepo</h4>
        
        <p>Kursen har ett <a href="https://github.com/dbwebb-se/webtec">kursrepo</a> på GitHub.</p>

        <h4>Kursmoment</h4>

        <ul>
            <li>Kmom01: Bygg en webbplats</li>
            <li>Kmom02: Styla en webbplats</li>
            <li>Kmom03: Programmera en webbplats</li>
            <li>Kmom04: PHP</li>
            <li>Kmom05: SQL</li>
            <li>Kmom06: SQL</li>
            <li>Kmom07/10: Projekt och examination</li>
        </ul>
    </aside>
</div>

<?php include('../view/footer.php') ?>