CREATE TABLE users (
    id INT (11) NOT NULL AUTO_INCREMENT, 
    username VARCHAR (30) NOT NULL, 
    pwd VARCHAR (255) NOT NULL, 
    email VARCHAR (100) NOT NULL, 
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME
);

CREATE TABLE sponsors (
    id int(11) NOT NULL AUTO_INCREMENT,
    file_name varchar(255) NOT NULL,
    file_path varchar(255) NOT NULL,
    sponsor_tier varchar(255) NOT NULL,
    sponsor_name varchar(255) NOT NULL,
    sponsor_website varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE team (
    id int(11) NOT NULL AUTO_INCREMENT,
    file_name varchar(255) NOT NULL,
    file_path varchar(255) NOT NULL,
    category varchar(255) NOT NULL,
    position varchar(255) NOT NULL,
    first_name varchar(255) NOT NULL,
    last_name varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

