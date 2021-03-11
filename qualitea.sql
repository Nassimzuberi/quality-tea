DROP DATABASE IF EXISTS qualitea;
CREATE DATABASE IF NOT EXISTS qualitea;

USE qualitea;

CREATE TABLE address (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   rue VARCHAR(50) NOT NULL ,
   cp INT(5) NOT NULL,
   ville VARCHAR(50) NOT NULL
);

CREATE TABLE roles (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50) NOT NULL
);


CREATE TABLE users (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   pseudo VARCHAR(50) NOT NULL UNIQUE ,
   password VARCHAR(100) NOT NULL,
   email VARCHAR(50) NOT NULL UNIQUE ,
   address_id INT(6) UNSIGNED NOT NULL,
   role_id INT(6) UNSIGNED NOT NULL,
   sexe VARCHAR(50) NOT NULL,
   tel INT(10),
   FOREIGN KEY (address_id) REFERENCES address(id),
   FOREIGN KEY (role_id) REFERENCES roles(id)
);
CREATE TABLE articles (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   prix INT(6) NOT NULL,
   stock INT(6),
   img VARCHAR(50) NOT NULL
);

