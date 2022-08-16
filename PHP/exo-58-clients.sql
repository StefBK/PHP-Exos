-- Création BDD
CREATE DATABASE IF NOT EXISTS Gestion;

-- Sélection de la BDD
USE Gestion;

-- Création Table Client
CREATE TABLE client(
    Client_Int_Id int(5) NOT NULL,
    Client_Vch_Nom varchar(25) NOT NULL,
    Client_Vch_Prenom varchar(25) NOT NULL,
    Client_Vch_Cp varchar(5),
    Client_Vch_Ville varchar(25),
    PRIMARY KEY(Client_Int_Id)
);

-- Population Table Client
INSERT INTO client(Client_Int_Id,Client_Vch_Nom,Client_Vch_Prenom,Client_Vch_Cp,Client_Vch_Ville) VALUES
    (1,'MOSQUITO','Momo','26650','DIE'),
    (2,'DU SOIR','Caca','07800','LA VOULTE'),
    (3,'LATINA','Eunice','26800',"TAIN L'HERMITAGE"),
    (4,'TAUTOU','Nejma','26000','VALENCE'),
    (5,'BK','Stef','26000','VALENCE');


-- Création Table Commande
CREATE TABLE commande(
    Cde_Int_IdCd int(5) NOT NULL,
    Cde_Dte_Date date NOT NULL,
    Cde_Int_Qte int(5) NOT NULL,
    Cde_Float_Prix float(10) NOT NULL,
    Cde_Int_IdCd_Client_Int_Id int(5) NOT NULL,
    PRIMARY KEY(Cde_Int_IdCd),
    FOREIGN KEY(Cde_Int_IdCd_Client_Int_Id) REFERENCES client(Client_Int_Id)
);

-- Population Table Commande
INSERT INTO commande(Cde_Int_IdCd,Cde_Dte_Date,Cde_Int_Qte,Cde_Float_Prix,Cde_Int_IdCd_Client_Int_Id) VALUES
    (1,'18/05/2022','3','19.99',1),
    (2,'20/05/2022','1','399.99',1),
    (3,'19/05/2022','2','20',2),
    (4,'19/05/2022','3','5.67',2),
    (5,'20/05/2022','4','12.23',3),
    (6,'05/05/2022','4','999.99',4);