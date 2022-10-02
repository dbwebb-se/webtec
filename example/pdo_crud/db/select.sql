--
-- Various SELECT used during the exercise
--
.header on
.mode column

-- Show all users
SELECT
    acronym,
    name,
    role
    avatar,
    signature
FROM user
;

-- Show one user
SELECT
    acronym,
    name,
    role,
    avatar,
    signature
FROM user
WHERE
    acronym = 'admin'
;

-- Show users and passwords
SELECT
    acronym,
    password
FROM user;

-- Get the password for a acronym
SELECT
    password
FROM user
WHERE
    acronym = 'doe'
;

-- Insert a new user
INSERT INTO user
    (acronym, password, role)
VALUES
    ('mumin', 'hash', 'user')
;

-- Delete a user
DELETE FROM user
WHERE
    acronym = 'mumin'
;