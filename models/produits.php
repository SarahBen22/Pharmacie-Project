<?php

require_once "./models/model.php";

class ProduitsModel extends Model {
	// attributs: correspondance à mes champs ds la bdd
	  private $id;
		private $nom_produit;
		private $prix;
		private $id_categories;

		public function createOne ($nom_produit, $prix, $id_categories){

		$db=parent::connect();

		 // on recherche si le produit est déjà utilisé par un autre membre
		 $sql = 'SELECT * FROM produits WHERE nom_produit="$nom_produit"';
		 $req = $db->prepare($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());// voir s il y a une erreur
		 $result=$req->execute();
		 $data =$req->fetchAll(); //recup les données le prepare permet de preparer la requete et eviter des injections SQL


		 if (empty($data)) {
				$sql = 'INSERT INTO produits VALUES(0, "$nom_produit","$prix","$id_jeux","$id_categories")';
				$req= $db->prepare($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
				 $req->execute();

				return "le produit a bien été ajouté "; // utilisateur a été ajouté
		 }
		 else {
				$erreur = 'le produit n\'a pas été ajouté correctement';
				return $erreur;
		 }

		}

	public function getAll (){

		$db=parent::connect();

			 // je veux tous les champs de Produits
		$sql = "select * from produits
		LEFT JOIN categories on produits.categories= categories.id";

	// les left join représentent les clés étrangères ds la BDD (ils réunissent les infos entre les tables)
		$query = $db -> prepare($sql);
		$query -> execute();
		$produitsList= $query -> fetchAll();


		return $produitsList;
	}

	// Fonction qui récupère la liste des produits en fonction de la console
	public function getByConsole ($categories){
		$db=parent::connect();

		// je veux tous les produits qui sont sur une console en particulier
		$sql = "select produits.*
		LEFT JOIN consoles on produits.id_console= consoles.id

		WHERE consoles.nom_console= :console";

	// les left join représentent les clés étrangères ds la BDD (ils réunissent les infos entre les tables)
		$query = $db -> prepare($sql);
		$query->bindValue(':console', $console);
		$query -> execute();
		$produitsList= $query -> fetchAll();


		return $produitsList;
	}

	public function get($data){

        $db=parent::connect();
        // Si in entier est en paramètre on récupère par rapport à l'Id
        if(is_int($data)){
            $sql= "SELECT * FROM produits WHERE id = :id";
            $query= $db -> prepare ($sql);
            $query->bindValue(':id', $data);
        }

        // Si une chaine de charactères est en paramètre on récupère par rapport au nom du produit
        else if (is_string($data)){
            $sql= "SELECT * FROM produits WHERE nom_produit= :nom_produit";
            $query= $db -> prepare ($sql);
            $query->bindValue(':nom_produit', $data);
        }
        else{
            // Si le paramètre est incorrect on retourne false
            return 0;
        }

        $query -> execute ();
        $result = $query->fetch();
        if($result && $result['nom_produit'] != ''){
            // On enregistre les valeurs dans l'instance actuelle
            $this->setId($result['id']);
            $this->setNom_produit($result['nom_produit']);
            $this->setPrix($result['prix']);
            $this->setId_categories($result['id_categories']);


            return $this;
        }
        else{
            return 0; // Si il n'y a pas de resultat on retourne false
        }
    }

	// GETTERS //
	  public function id() { return $this->id; }
	  public function nom_produit() { return $this->nom_produit; }
	  public function prix() { return $this->prix; }
	  public function id_categories() { return $this->id_categories;}




		// SETTERS // pour assigner des valeurs aux attributs
		  public function setId( $id ){
		    $id = (int) $id;

		    if($id > 0){
		      $this->id = $id;
		    }
		}

		  public function setNom_produit( $nom_produit){
		    if(is_string($nom_produit)){
		      $this->nom_produit = $nom_produit;
		    }
		}

		  public function setPrix( $prix ){
		    if(is_string($prix)){
		      $this->prix = $prix;
		    }
		}

		  public function setId_categories( $id_categories ){
		    if(is_string($id_categories)){
		      $this->id_categories = $id_categories;
		    }
		  }


		//UPDATE
			public function update(ProduitsModel $prod){

				$db=parent::connect();

				// On teste d'abord si l'utilisateur existe déjà ou si il est vide
				if($this->exists($prod->nom_produit())){
					return '<p class="red">Le\'produit'.$prod->nom_produit().' est déjà enregistré.</p>';
				}
				elseif($prod->nom_produit() == ''){
					return '<p class="red">Le produit n\'a pas été enregistré correctement.</p>';
				}

				$sql= "UPDATE prod SET nom_produit = :nom_produit, id_console = :id_console, id_jeux = :id_jeux, annee_de_sortie = :annee_de_sortie , stock = :stock, prix = :prix, id_pegi = :id_pegi WHERE id=".$prod->id();
				$query= $db -> prepare ($sql);
				$query->bindValue(':nom_produit', $prod->nom_produit());
				$query->bindValue(':prix', $prod->prix());
				$query->bindValue(':id_categories', $prod->id_categories());

				$result = $query -> execute ();

				if($result){	// Si $result est vrai alors la requête c'est bien déroulé
					return '<p class="green">Le\'produit '.$prod->nom_produit().' a bien été modifié.</p>';
				}
				else{
					return '<p class="red">Echec de la modification du \'produit '.$prod->nom_produit().'</p>';
				}
			}




		  // DELETE
		  	public function delete($data){

		  		$db=parent::connect();

		  		if(is_int($data)){
		  			$sql= "DELETE FROM produits WHERE id = ".$data;
		  			$query= $db -> prepare ($sql);
		  			$query -> execute ();

		  			return '<p class="green">Le produit a bien été supprimé.</p>';
		  		}

		  		return '<p class="red">Echec de la suppression du produit.</p>';
		  	}








}


?>
