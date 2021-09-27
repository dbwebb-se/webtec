Flödet “Roll the dice”:

1. Sidan (session.php) visas, alla lokala variabler som t ex $dice är tomma och du trycker på knappen “Roll the dice”.

2. Formuläret pekar ut POST som method och session-process.php som action. Och när du klickar på knappen “Roll the dice”, så skickas vi till session-process.php med dold information (POST).

3. I session-process.php kollar vi vilken information vi fått in genom
$rollTheDice    = $_POST["doit"]  ?? null;
Finns det något i post-arrayen med nyckel “doit” och ja, det finns det eftersom vi tryckte på den knappen. På nycklarna “reset” och “kill” finns det inget denna gång.

4. Då går vi in i if-satsen på $rollTheDice och slumpar fram ett tal mellan 1 och 6 dvs slår tärningen och sparar det i session-arrayen med nyckeln “dice”.

5. Sen kollar vi om det finns något i session-arrayen med nyckeln “sum”, i så fall ökar vi den med värdet på tärningsslaget. På samma sätt ökar vi antalet slag med ett.

6. Sen går vi ur if-satsen och kommer till header, som skickar oss tillbaka till session.php.

7. Tillbaka på sidan session.php, så kollar vi först om det finns något i session-arrayen med nyckeln “dice” och om det finns så sparar vi det i en lokal variabel. Samma sak med “sum” och “rolls”. Nu har vi värden på de lokala variablerna. Vi sätter $diceClass för att visa rätt tärningsbild och räknar ut medeltalet.

8. In i formuläret igen. Eftersom $dice är satt så kommer tärningsbild, summan av de kastade tärningarna och medeltalet att visas upp.

9. Klickar du på “Roll the dice”, så upprepar sig allt igen. Klickar du på knappen “Restart” så tar vi bort session-variablerna “dice”, “sum” och “rolls” och kommer tillbaka till punkt 1.


Hur kan vi nu göra ett histogram i detta? Jo, då behöver vi spara antalet ettor, antalet tvåor etc någonstans precis som vi gör med summan i session-process.php. Sen behöver vi skriva ut informationen i session.php precis som vi gör med summan och medeltalet.
