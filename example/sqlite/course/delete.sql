--
-- Samples to DELETE.
--

DELETE FROM course
WHERE
    course = 'PA1439'
;

DELETE FROM course
WHERE
    name LIKE '%a%'
;

DELETE FROM course
LIMIT 1
;

DELETE FROM course
WHERE
    rowid = 4
;

DELETE FROM course;
