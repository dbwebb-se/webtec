SELECT * FROM course;

--
-- 
--
UPDATE course SET
    kmom = 'kmom05'
WHERE
    name = 'webtec';


UPDATE course SET
    done = datetime('now')
WHERE 
    code = 'DV1531';

