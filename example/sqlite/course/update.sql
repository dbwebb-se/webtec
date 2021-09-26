--
-- Update all rows in the table.
--
UPDATE course SET points = 5.0;
UPDATE course SET points = 5.0 LIMIT 1;
UPDATE course SET points = 7.5;



--
-- Update codes.
--
UPDATE course SET code='DV1561' WHERE name='javascript1';

UPDATE course SET
    code = 'PA1439'
WHERE
    code = 'DV1462'
;



--
-- Update dates
--
UPDATE course SET
    done = datetime('now')
WHERE
    code = 'PA1439'
;

UPDATE course SET
    done = datetime('now', 'localtime')
WHERE
    name = 'python'
;

UPDATE course SET
    kmom = 'kmom03/04',
    done = datetime(done, 'localtime')
WHERE
    code = 'PA1439'
;
