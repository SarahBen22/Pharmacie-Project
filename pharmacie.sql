#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: profil_client
#------------------------------------------------------------

CREATE TABLE profil_client(
        id           Int  Auto_increment  NOT NULL ,
        nom          Varchar (50) NOT NULL ,
        prenom       Varchar (50) NOT NULL ,
        pseudo       Varchar (50) NOT NULL ,
        email        Varchar (50) NOT NULL ,
        mot_de_passe Varchar (4) NOT NULL
	,CONSTRAINT profil_client_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        id               Int  Auto_increment  NOT NULL ,
        homeopathie      Varchar (100) NOT NULL ,
        phythotherapie   Varchar (100) NOT NULL ,
        veterinaire      Varchar (100) NOT NULL ,
        cosmetologie     Varchar (100) NOT NULL ,
        materiel_medical Varchar (100) NOT NULL ,
        orthopedie       Varchar (100) NOT NULL
	,CONSTRAINT categories_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produits
#------------------------------------------------------------

CREATE TABLE produits(
        id                Int  Auto_increment  NOT NULL ,
        nom_produit       Varchar (50) NOT NULL ,
        prix              Decimal (4) NOT NULL ,
        categorie_produit Varchar (4) NOT NULL ,
        id_categories     Int NOT NULL
	,CONSTRAINT produits_PK PRIMARY KEY (id)

	,CONSTRAINT produits_categories_FK FOREIGN KEY (id_categories) REFERENCES categories(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: paiement
#------------------------------------------------------------

CREATE TABLE paiement(
        id                Int  Auto_increment  NOT NULL ,
        type_de_paiement  Varchar (50) NOT NULL ,
        num_de_carte      Int NOT NULL ,
        date_d_expiration Datetime NOT NULL ,
        cryptogramme      Int NOT NULL ,
        nom_debiteur      Varchar (50) NOT NULL ,
        prenom_debiteur   Varchar (50) NOT NULL
	,CONSTRAINT paiement_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commandes
#------------------------------------------------------------

CREATE TABLE commandes(
        id               Int  Auto_increment  NOT NULL ,
        id_client        Int NOT NULL ,
        num_commande     Varchar (20) NOT NULL ,
        date_de_commande Varchar (20) NOT NULL ,
        total            Decimal NOT NULL
	,CONSTRAINT commandes_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: panier
#------------------------------------------------------------

CREATE TABLE panier(
        produits_id      Int NOT NULL ,
        profil_client_id Int NOT NULL ,
        quantites        Int NOT NULL
	,CONSTRAINT panier_PK PRIMARY KEY (produits_id,profil_client_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commandes_item
#------------------------------------------------------------

CREATE TABLE commandes_item(
        produits_id  Int NOT NULL ,
        commandes_id Int NOT NULL ,
        quantite     Int NOT NULL
	,CONSTRAINT commandes_item_PK PRIMARY KEY (produits_id,commandes_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: dans
#------------------------------------------------------------

CREATE TABLE dans(
        produits_id  Int NOT NULL ,
        commandes_id Int NOT NULL ,
        id           Int NOT NULL
	,CONSTRAINT dans_PK PRIMARY KEY (produits_id,commandes_id,id)

	,CONSTRAINT dans_commandes_item_FK FOREIGN KEY (produits_id,commandes_id) REFERENCES commandes_item(produits_id,commandes_id)
	,CONSTRAINT dans_produits0_FK FOREIGN KEY (id) REFERENCES produits(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lié à
#------------------------------------------------------------

CREATE TABLE lie_a(
        id           Int NOT NULL ,
        produits_id  Int NOT NULL ,
        commandes_id Int NOT NULL
	,CONSTRAINT lie_a_PK PRIMARY KEY (id,produits_id,commandes_id)

	,CONSTRAINT lie_a_commandes_FK FOREIGN KEY (id) REFERENCES commandes(id)
	,CONSTRAINT lie_a_commandes_item0_FK FOREIGN KEY (produits_id,commandes_id) REFERENCES commandes_item(produits_id,commandes_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contenu dans le
#------------------------------------------------------------

CREATE TABLE contenu_dans_le(
        produits_id      Int NOT NULL ,
        profil_client_id Int NOT NULL ,
        id               Int NOT NULL
	,CONSTRAINT contenu_dans_le_PK PRIMARY KEY (produits_id,profil_client_id,id)

	,CONSTRAINT contenu_dans_le_panier_FK FOREIGN KEY (produits_id,profil_client_id) REFERENCES panier(produits_id,profil_client_id)
	,CONSTRAINT contenu_dans_le_commandes0_FK FOREIGN KEY (id) REFERENCES commandes(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: passe
#------------------------------------------------------------

CREATE TABLE passe(
        id               Int NOT NULL ,
        id_profil_client Int NOT NULL
	,CONSTRAINT passe_PK PRIMARY KEY (id,id_profil_client)

	,CONSTRAINT passe_commandes_FK FOREIGN KEY (id) REFERENCES commandes(id)




	=======================================================================
	   Désolé, il faut activer cette version pour voir la suite du script ! 
	=======================================================================
