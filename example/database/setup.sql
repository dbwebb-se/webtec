--
-- Create the database from sources
--

--
-- Svenska akademin utökade namnlängd/namnlista
--
DROP TABLE IF EXISTS namnlista;
CREATE TABLE namnlista (
    namn TEXT, -- PRIMARY KEY,
    datum TEXT,
    namnlangd TEXT
);

DELETE FROM namnlista;
.mode csv
.import data/Svenska_akademin_namnlista.csv namnlista

.headers ON
.mode column
SELECT * FROM namnlista LIMIT 3;



--
-- Svenska akademin namnens betydelse i namnlängden
--
DROP TABLE IF EXISTS namnbetydelse;
CREATE TABLE namnbetydelse (
    namn TEXT PRIMARY KEY,
    betydelse TEXT
);

DELETE FROM namnbetydelse;
.mode csv
.import data/Svenska_akademin_namn_betydelse.csv namnbetydelse

.headers ON
.mode column
SELECT * FROM namnbetydelse LIMIT 3;



--
-- SCB Efternamn och antal bärare
--
DROP TABLE IF EXISTS efternamn_antal;
CREATE TABLE efternamn_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);

DELETE FROM efternamn_antal;
.mode csv
.import data/namn-med-minst-tva-barare-31-december-2020_efternamn.csv efternamn_antal

.headers ON
.mode column
SELECT * FROM efternamn_antal LIMIT 3;



--
-- SCB Förnamn och antal bärare för kvinnor
--
DROP TABLE IF EXISTS fornamn_k_antal;
CREATE TABLE fornamn_k_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);

DELETE FROM fornamn_k_antal;
.mode csv
.import data/namn-med-minst-tva-barare-31-december-2020_fornamn-kvinnor.csv fornamn_k_antal

.headers ON
.mode column
SELECT * FROM fornamn_k_antal LIMIT 3;



--
-- SCB Förnamn och antal bärare för män
--
DROP TABLE IF EXISTS fornamn_m_antal;
CREATE TABLE fornamn_m_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);

DELETE FROM fornamn_m_antal;
.mode csv
.import data/namn-med-minst-tva-barare-31-december-2020_fornamn-man.csv fornamn_m_antal

.headers ON
.mode column
SELECT * FROM fornamn_m_antal LIMIT 3;



--
-- SCB Tilltalsnamn och antal bärare för kvinnor
--
DROP TABLE IF EXISTS tilltal_k_antal;
CREATE TABLE tilltal_k_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);

DELETE FROM tilltal_k_antal;
.mode csv
.import data/namn-med-minst-tva-barare-31-december-2020_tilltalsnamn-kvinnor.csv tilltal_k_antal

.headers ON
.mode column
SELECT * FROM tilltal_k_antal LIMIT 3;



--
-- SCB Tilltalsnamn och antal bärare för män
--
DROP TABLE IF EXISTS tilltal_m_antal;
CREATE TABLE tilltal_m_antal (
    namn TEXT PRIMARY KEY,
    antal INTEGER
);

DELETE FROM tilltal_m_antal;
.mode csv
.import data/namn-med-minst-tva-barare-31-december-2020_tilltalsnamn-man.csv tilltal_m_antal

.headers ON
.mode column
SELECT * FROM tilltal_m_antal LIMIT 3;



--
-- Svenska helgdagar (fasta)
--
DROP TABLE IF EXISTS helgdag;
CREATE TABLE helgdag (
    datum TEXT,
    namn TEXT
);

DELETE FROM helgdag;
.mode csv
.import data/svenska_fasta_helgdagar.csv helgdag

.headers ON
.mode column
SELECT * FROM helgdag LIMIT 3;



--
-- Svenska helgdagar (rörliga)
--
DROP TABLE IF EXISTS helgdagr;
CREATE TABLE helgdagr (
    datum TEXT,
    namn TEXT
);

DELETE FROM helgdagr;
.mode csv
.import data/svenska_rorliga_helgdagar.csv helgdagr

.headers ON
.mode column
SELECT * FROM helgdagr LIMIT 3;



--
-- Tid för vårdagjämning, sommarsolstånd, höstdagjämning
-- och vintersolstånd
--
DROP TABLE IF EXISTS solstand;
CREATE TABLE solstand (
    namn TEXT,
    datum DATETIME
);

DELETE FROM solstand;
.mode csv
.import data/dagjamning-och-solstand.csv solstand

.headers ON
.mode column
SELECT * FROM solstand LIMIT 3;
