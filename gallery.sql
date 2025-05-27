DROP DATABASE gallery;

CREATE DATABASE gallery;

USE gallery;

CREATE TABLE users (
    userId INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    description TEXT,
    filename VARCHAR(255),
    category VARCHAR(50)
);

INSERT INTO
    images (title, description, filename, category)
VALUES
    (
        'Mountains',
        'A beautiful mountain landscape.',
        'gallery-1.png',
        'nature'
    ),
    (
        'Lights',
        'Dangling lights from a tree.',
        'gallery-2.png',
        'nature'
    ),
    (
        'Nature',
        'Flowing river in the forest.',
        'gallery-3.png',
        'nature'
    ),
    (
        'Retro',
        'Retro Cadillac. The iconic car of the 1950s.',
        'gallery-4.png',
        'cars'
    ),
    (
        'Fast',
        'Red Ferrari Roma.',
        'gallery-5.png',
        'cars'
    ),
    ('Classic', 'Black GNX.', 'gallery-6.png', 'cars'),
    ('Man', 'Smiling Man.', 'gallery-7.png', 'people'),
    (
        'Girl',
        'Smiling Girl.',
        'gallery-8.png',
        'people'
    );
