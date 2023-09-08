Databas för namn
==========================

Databasen är en samling av namn och relaterad data såsom namnsdagar och betydelse.

Databasfilen heter `db.sqlite` och innehåller följande tabeller.

```
sqlite> .table
efternamn_antal  helgdag          namnlista        tilltal_m_antal
fornamn_k_antal  helgdagr         solstand
fornamn_m_antal  namnbetydelse    tilltal_k_antal
```

Så här ser databasens schema ut.

```
sqlite> .schema
CREATE TABLE namnlista (
    namn TEXT, -- PRIMARY KEY,
    datum TEXT,
    namnlangd TEXT
);
CREATE TABLE namnbetydelse (
    namn TEXT PRIMARY KEY,
    betydelse TEXT
);
CREATE TABLE efternamn_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);
CREATE TABLE fornamn_k_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);
CREATE TABLE fornamn_m_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);
CREATE TABLE tilltal_k_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);
CREATE TABLE helgdag (
    datum TEXT,
    namn TEXT
);
CREATE TABLE helgdagr (
    datum TEXT,
    namn TEXT
);
CREATE TABLE solstand (
    namn TEXT,
    datum DATETIME
);
```

Datat i tabellerna är insamlat från de platser som anges nedan.



Svenska akademin - Namnlängd och namnlista
--------------------------

Du kan läsa beskrivning av [Svenska akademins almanacka, namnlängd och namnlista](https://www.svenskaakademien.se/svenska-akademien/almanackan).

Data är insamlad från webbplatsen till filen `data/Svenska_akademin_namnlista.csv` och därefter importerad till databasen.

Notering. I datat på webbplatsen förekommer dubletter av namn och att ett namn kan återkomma på flera datum. Tabellen är inte normaliserad och innehåller ingen primärnyckel.

Databastabellen heter `namnlista` och innehåller den utökade namnlistan, med datum för namnsdag och om namnet ingår i namnlängden.

```
sqlite> SELECT * FROM namnlista LIMIT 3;
namn        datum       namnlangd
----------  ----------  ----------
Nyårsdagen  1/1         Ja
Svea        2/1         Ja
Alfrida     3/1         Ja
```



Svenska akademin - Namnens ursprung och betydelse
--------------------------

De namn som finns i namnlängden har en förklaring rörande [Namnens ursprung och betydelse](https://www.svenskaakademien.se/svenska-akademien/almanackan/namnens-ursprung-och-betydelse).

Data är insamlad från webbplatsen till filen `data/Svenska_akademin_namn_betydelse.csv` och därefter importerad till databasen.

Databastabellen heter `namnbetydelse` och innehåller namnet och dess betydelse.

```
sqlite> SELECT * FROM namnbetydelse LIMIT 3;
namn        betydelse
----------  ---------------------------------------------------------------

Abel        Bibliskt namn, besläktat med ett assyriskt namn med bet. ’son’.
Abraham     Bibliskt namn med bet. ’fader till många’.
Ada         Hebreiskt namn med oviss bet.; även kortform av Adela.
```



SCB - Namnsök
--------------------------

SCB har en tjänst som heter Namnsök på webbsidan "[Sök på namn – Hur många heter ...?](https://www.scb.se/hitta-statistik/sverige-i-siffror/namnsok/)". Där finns data som anger hur många folkbokförda i Sverige som har ett visst förnamn, tilltalsnamn och efternamn.

Filen som använts som underlag är "namn-med-minst-tva-barare-31-december-2020.xlsx" som kan laddas ned från SCB hemsida.

Exelfilen innehåller följande data för den folkbokförda befolkningen 31 december 2020 och användes för att överföra till följande csv-filer och databastabeller.

| Innehåll | Fil | Tabell |
|----------|-----|--------|
| Efternamn och antal bärare | `data/namn-med-minst-tva-barare-31-december-2020_efternamn.csv` | `efternamn_antal` |
| Förnamn och antal bärare för kvinnor | `data/namn-med-minst-tva-barare-31-december-2020_fornamn-kvinnor.csv` | `fornamn_k_antal` |
| Förnamn och antal bärare för män | `data/namn-med-minst-tva-barare-31-december-2020_fornamn-man.csv` | `fornamn_m_antal` |
| Tilltalsnamn och antal bärare för kvinnor | `data/namn-med-minst-tva-barare-31-december-2020_tilltalsnamn-kvinnor.csv` | `tilltal_k_antal` |
| Tilltalsnamn och antal bärare för män | `data/namn-med-minst-tva-barare-31-december-2020_tilltalsnamn-man.csv` | `tilltal_m_antal` |

Här kan du se exempel på utskrifter från respektive tabell.

```
sqlite> SELECT * FROM efternamn_antal LIMIT 3;
namn        antal
----------  ----------
A Alhardan  3
A Almohame  2
A Alrahman  2

sqlite> SELECT * FROM fornamn_k_antal LIMIT 3;
namn        antal
----------  ----------
Aaba        2
Aabdi       2
Aabha       2

sqlite> SELECT * FROM fornamn_m_antal LIMIT 3;
namn        antal
----------  ----------
A:Son       6
Aaban       8
Aabdi       4

sqlite> SELECT * FROM tilltal_k_antal LIMIT 3;
namn        antal
----------  ----------
Aaba        2
Aabha       2
Aada        12

sqlite> SELECT * FROM tilltal_m_antal LIMIT 3;
namn        antal
----------  ----------
Aaban       3
Aad         2
Aadam       19
```



Svenska helgdagar
--------------------------

På Wikipedia kan vi läsa om "[Helgdagar i Sverige](https://sv.wikipedia.org/wiki/Helgdagar_i_Sverige)". En del helgdagar har fasta datum och andra är rörliga datum som kan räknas ut beroende av andra händelser.

De fasta helgdagarna är lagrade i filen `data/svenska_fasta_helgdagar.csv` och importerade till tabellen `helgdag`.

```
sqlite> SELECT * FROM helgdag LIMIT 3;
datum       namn
----------  ----------
1/1         Nyårsdagen
6/1         Trettondag
1/5         Första maj
```

De rörliga helgdagarna är lagrade i filen `data/svenska_rorliga_helgdagar.csv` och importerade till tabellen `helgdagr`.

```
sqlite> SELECT * FROM helgdagr LIMIT 3;
datum         namn
------------  ------------------------
Långfredagen  Fredagen innan Påskdagen
Påskafton     Lördagen innan Påskdagen
Påskdagen     Första söndagen efter ec
```



Dagjämningar och solstånd
--------------------------

Dagjämning (vår och höst) tillsammans med Sommar- och Vinter-solstånd är de fyra tidpunkter då dagarna är lika långa, eller solen står som lägst/högst på himmelen.

På norra halvklotet är vårdagjämningen i mars och höstdagjämningen är i september. Sommarsolståndet är i juni och vintersolståndet i december. På södra halvklotet gäller det omvända.

Du kan läsa om detta på Wikipedia i [Vårdagjämning](https://sv.wikipedia.org/wiki/V%C3%A5rdagj%C3%A4mningen).

I filen `data/dagjamning-och-solstand.csv` finns tidpunkter för dagjämning och solstånd för ett antal år. Dessa är importerade till tabellen `solstand`.

```
sqlite> SELECT * FROM solstand LIMIT 3;
namn           datum
-------------  -------------------
Vårdagjämning  2021-03-20 09:37:27
Vårdagjämning  2022-03-20 15:33:23
Vårdagjämning  2023-03-20 12:24:24
```



Övrigt
--------------------------

Wikipedia har en "[Lista över namnsdagar i Sverige i datumordning](https://sv.wikipedia.org/wiki/Lista_%C3%B6ver_namnsdagar_i_Sverige_i_datumordning)".
