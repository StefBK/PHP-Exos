-- Création de la BDD Magasin
CREATE DATABASE IF NOT EXISTS magasin;

-- Utilisation de la BDD Magasin
USE magasin;

-- Création de la TABLE Client et Article
CREATE TABLE client(
    Id_Client int NOT NULL,
    Nom varchar(20) NOT NULL,
    Prenom varchar(20) NOT NULL,
    Adresse varchar(100) NOT NULL,
    Ville varchar(25) NOT NULL,
    Age int(2) NOT NULL,
    Mail varchar(25) NOT NULL,
    PRIMARY KEY(Id_Client)
);

CREATE TABLE article(
    Id_Article int NOT NULL,
    Designation varchar(20) NOT NULL,
    Prix_Unitaire float(6) NOT NULL,
    Categorie varchar(25) NOT NULL,
    PRIMARY KEY(Id_Article)
);

-- Insertion des données dans la TABLE Client et Article
INSERT INTO client VALUES(
    1,'BK','Stef','Avenue Victor Hugo','VALENCE',50,'stefstef@gmail.com'
);

INSERT INTO article VALUES(
    1,'Piano',499.99,'MUSIQUE'
);

-- PHPMYADMIN - IMPORTER - 