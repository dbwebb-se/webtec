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
