-- Start SQLite using
--  sqlite3 -column -header db.sqlite < file.sql
--
-- or when in sqlite3:
--  sqlite> .headers on
--  sqlite> .mode columns
--

--
-- Try using various SELECT-statements.
--
SELECT * FROM course;

SELECT rowid, * FROM course;

SELECT name FROM course;

SELECT name, points FROM course WHERE code = 'PA1439';

SELECT name, points FROM course WHERE term = 1;

SELECT
    rowid AS 'Id',
    *
FROM course
WHERE
    name IN ('htmlphp', 'design')
;

SELECT * FROM course WHERE name IN ('htmlphp', 'python');

SELECT
    *
FROM course
WHERE
    code LIKE 'PA%'
;

SELECT
    *
FROM course
ORDER BY code ASC
;



--
-- Show courses that are done (using builtin functions).
--
SELECT
    name || ' (' || code || ')' AS 'Kurs',
    strftime('%Y-%m-%d', done) AS 'Klar!'
FROM course
WHERE
    done IS NOT NULL
;



--
-- Aggregate, sum up points
--
SELECT COUNT(code) FROM course;

SELECT SUM(points) AS 'Summa poäng' FROM course;

SELECT
    SUM(points) AS 'Summa poäng'
FROM course
WHERE
    done IS NOT NULL
;
