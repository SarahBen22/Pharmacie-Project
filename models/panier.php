<?php

require_once "./models/model.php";

class PanierModel extends Model {
	// attributs: correspondance à mes champs ds la bdd

		private $produits_id;
	  private $profil_client_id;
		private $quantites;

		public function createOne ($produits_id, $profil_client_id,$quantites){

		$db=parent::connect();

		 // on recherche si ce login est déjà utilisé par un autre membre
		 $sql = 'SELECT * FROM panier WHERE produits_id= '.$produits_id;
		 $req = $db->prepare($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());// voir s il y a une erreur
		 $result=$req->execute();
		 $data =$req->fetchAll(); //recup les données


		 if (empty($data)) {
				$sql = 'INSERT INTO panier VALUES("'.$produits_id.'","'.$profil_client_id.'","'.$quantites.'")';
				$req= $db->prepare($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
				 $req->execute();

				return "le produit selectionné a bien été ajouté dans le panier"; // utilisateur a été ajouté
		 }
		 else {
				$erreur = 'le produit selectionné n\'a pas été ajouté correctement dans le panier';
				return $erreur;
		 }

		}

	public function getAll (){

		$db=parent::connect();

		$sql = "select * from panier
		LEFT JOIN produits on panier.produits_id = produits.id
    LEFT JOIN profil_client on panier.profil_client_id = profil_client.id ";
		$query = $db -> prepare($sql);
		$query -> execute();
		$panierList= $query -> fetchAll();

		return $panierList;
	}

	// GETTERS //

	  public function produits_id() { return $this->produits_id; }
    public function profil_client_id() { return $this->profil_client_id; }
		public function quantites() { return $this->quantites;}

		// SETTERS // pour assigner des valeurs aux attributs
		

		  public function setProduits_id( $produits_id ){
		    if(is_int($produits_id)){
		      $this->produits_id = $produits_id;
		    }
		}

    public function setProfil_client_id( $profil_client_id ){
      if(is_int($profil_client_id)){
        $this->profil_client_id= $profil_client_id;
      }
  }

	public function setQuantites( $quantites ){
		if(is_int($quantites)){
			$this->quantites = $quantites;
		}

	}

		//UPDATE
			public function update(PanierModel $pan){

				$db=parent::connect();

				// On teste d'abord si l'utilisateur existe déjà ou si il est vide
				if($this->exists($pan>produits_id())){
					return '<p class="red">Le produit '.$pan->nom().' a déjà été ajouté dans le panier.</p>';
				}
				elseif($pan->nom() == ''){
					return '<p class="red">Le panier est vide.</p>';
				}

				$sql= "UPDATE pan SET produits_id = :produits_id, profil_client_id = :profil_client_id, quantites = :quantites WHERE produits_id=".$pan->produits_id()." AND profil_client_id=".$pan->commandes_id();
				$query= $db -> prepare ($sql);
        $query->bindValue(':produits_id', $pan->produits_id());
        $query->bindValue(':profil_client_id', $comm->profil_client_id());
				$query->bindValue(':quantites', $comm->quantites());

				$result = $query -> execute ();

				if($result){	// Si $result est vrai alors la requête c'est bien déroulé
					return '<p class="green">Le panier'.$pan->nom().' a bien été modifié.</p>';
				}
				else{
					return '<p class="red">Echec de la modification du panier '.$pan->nom().'</p>';
				}
			}




		  // DELETE
		  	public function delete($data){

		  		$db=parent::connect();

		  		if(is_int($data)){
		  			$sql= "DELETE FROM panier WHERE id = ".$data;
		  			$query= $db -> prepare ($sql);
		  			$query -> execute ();

		  			return '<p class="green">Le produit a bien été supprimé dans le panier.</p>';
		  		}

		  		return '<p class="red">Echec de la suppression du produit dans le panier.</p>';
		  	}


}


?>
