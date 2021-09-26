--
-- SQL to create sample database in SQLite.
--
-- Start SQLite using
--  sqlite3 -column -header db.sqlite < file.sql
--
-- or when in sqlite3:
--  sqlite> .headers on
--  sqlite> .mode columns
--

--
-- CREATE TABLE
--
DROP TABLE IF EXISTS course;
CREATE TABLE course
(
    code TEXT,
    name TEXT NOT NULL,
    points REAL DEFAULT 7.5,
    term INTEGER,
    kmom INTEGER,
    done DATETIME,
    
    PRIMARY KEY (code)
);
