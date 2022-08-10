<?php
include('../config/config.php');

$title = 'Om mig själv';

include('../view/header.php');
?>

<main class="main">
    <article class="article">
        <header>
            <h1>Om Mig Själv</h1>
            <p class="author">Skriven av Mikael Roos, uppdaterad <date datetime="2022-06-29">2022-06-29</date>.</p>
        </header>

        <p>Så, en presentation en bra början. Skriv några ord om dig själv. Jag börjar.</p>

        <figure class="figure right">
            <img src="img/me.png" width="300" alt="Bild på mig">
            <figcaption>Mikael Roos pratar gärna med ankan.</figcaption>
        </figure>

        <p>Mitt namn är Mikael Roos. Född och uppvuxen i Bankeryd, Småland, strax utanför Jönköping, i ett villaområde som byggdes upp samtidigt som vi flyttade in där. Jag gillade landhockey och har spelat bandy och hockey samt gått bowlinggymnasiet i Nässjö. Jag har varit städare, diskare, kallskänka, servitör och kock. På ett bananskal landade jag i Ronneby när jag började högskolan 1990, när jag slutade fann jag min fru, barn och så vidare.</p>

        <p>Programmering har alltid intresserat mig sedan 13-årsåldern och min första dator var en Spectravideo 328 med bandspelare.</p>

        <p>Om jag skall nämna någon hobby, förutom webbprogrammering, så får det bli att bära sten på sommarstugetomten, och det finns sten så det räcker och blir över.</p>

        <p>Till och från får jag för mig att börja på lite hobbies, ett år
        satsade jag på pokerspel, ett annat år var det geocaching och sedan turfing. De senaste hobbyarna är jakt, skogsbruk och lantbruk tillsammans med intelligenta hem, det finns så mycket skojiga saker att lära sig!</p>

        <p>Vi syns och hörs i forum och chatt!</p>

        <footer class="byline">

            <figure class="figure left">
                <img src="https://mikaelroos.sstatic.se/image/mos-tjaro.jpg?w=100&a=25,14,12,12&cf&sa=webp" alt="Bild på mig">
                <figcaption>Mikael Roos</figcaption>
            </figure>

            <p><strong>Mikael Roos</strong> undervisar och skriver om programmering, databaser och webbprogrammering samt utmaningen med att undervisa på distans och campus. Mikael driver eget företag inom programmering och på kvällarna jobbar han med sina hobbyprojekt.</p>

        </footer>

    </article>
</main>

<?php include('../view/footer.php') ?>
