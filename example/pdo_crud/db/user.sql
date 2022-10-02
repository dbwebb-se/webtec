--
-- To create and populate a user table
-- 
.header on
.mode column

-- Create the table
DROP TABLE IF EXISTS user;
CREATE TABLE user (
    acronym TEXT PRIMARY KEY,
    name TEXT,
    password TEXT,
    role TEXT,
    avatar TEXT,
    signature TEXT
);

-- Insert the users
INSERT INTO user VALUES
('admin', 'Id Admin', '$2y$10$WfMUgKcUGYhVOR6v594YEO1CN0zyQeLEzbrZti0I7RNOVJG0yI1Jy', 'admin', 'img/admin.png', '/I decide it all'),
('doe', 'John/Jane Doe', '$2y$10$KRxrymMsl3tz2YMjD30qauVxOha2QkVlKlleaCUaPa3DSRRIMmCkS', 'user', 'img/doe.png', '/Who am I?'),
('mos', 'Mikael Roos', '$2y$10$4Oqn764Puyr6Toio223mSuqeNWrILTBw13W5hY5KJJx.ybkNoxbeS', 'user', 'img/mos.jpg', '⠠⠵')
;

-- Show the content of the table
SELECT * FROM user;
