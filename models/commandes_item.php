<?php

require_once "./models/model.php";

class Commandes_ItemModel extends Model {
	// attributs: correspondance à mes champs ds la bdd

		private $produits_id;
	  private $commandes_id;
		private $quantite;

		public function createOne ($produits_id, $id_commande,$quantite){

		$db=parent::connect();

		 // on recherche si ce login est déjà utilisé par un autre membre
		 $sql = 'SELECT * FROM commandes_item WHERE produits_id= '.$produits_id;
		 $req = $db->prepare($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());// voir s il y a une erreur
		 $result=$req->execute();
		 $data =$req->fetchAll(); //recup les données


		 if (empty($data)) {
				$sql = 'INSERT INTO panier VALUES("'.$produits_id.'","'.$commandes_id.'","'.$quantite.'")';
				$req= $db->prepare($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
				 $req->execute();

				return "le produit selectionné a bien été ajouté à la commande"; // utilisateur a été ajouté
		 }
		 else {
				$erreur = 'le produit selectionné n\'a pas été ajouté correctement à la commande';
				return $erreur;
		 }

		}

	public function getAll (){

		$db=parent::connect();

		$sql = "select * from commandes_item
		LEFT JOIN produits on commandes_item.produits_id = produits.id
    LEFT JOIN commandes on commandes_item.commandes_id = commandes.id ";
		$query = $db -> prepare($sql);
		$query -> execute();
		$panierList= $query -> fetchAll();

		return $panierList;
	}

	// GETTERS //
	  public function produits_id() { return $this->produits_id; }
	  public function commandes_id() { return $this->commandes_id; }
    public function quantite() { return $this->quantite; }


		// SETTERS // pour assigner des valeurs aux attributs


		  public function setProduits_id( $produits_id ){
		    if(is_int($produits_id)){
		      $this->produits_id = $produits_id;
		    }
		}

    public function setCommandes_id( $commandes_id ){
      if(is_int($commandes_id)){
        $this->commandes_id= $commandes_id;
      }
  }

	public function setQuantite( $quantite ){
		if(is_int($quantite)){
			$this->quantite = $quantite;
		}

	}

		//UPDATE
			public function update(Commandes_ItemModel $ci){

				$db=parent::connect();

				// On teste d'abord si l'utilisateur existe déjà ou si il est vide
				if($this->exists($ci>produits_id())){
					return '<p class="red">Le produit '.$ci->nom().' a déjà été ajouté à la commande.</p>';
				}
				elseif($ci->nom() == ''){
					return '<p class="red">La commande est vide.</p>';
				}

				$sql= "UPDATE ci SET produits_id = :produits_id, commandes_id = :commandes_id, quantite = :quantite WHERE produits_id=".$ci->produits_id()." AND commandes_id=".$ci->commandes_id();
				$query= $db -> prepare ($sql);
        $query->bindValue(':produits_id', $ci->produits_id());
        $query->bindValue(':commandes_id', $ci->commandes_id());
				$query->bindValue(':quantite', $ci->quantite());

				$result = $query -> execute ();

				if($result){	// Si $result est vrai alors la requête c'est bien déroulé
					return '<p class="green">La commande'.$ci->nom().' a bien été modifié.</p>';
				}
				else{
					return '<p class="red">Echec de la modification de la commande '.$ci->nom().'</p>';
				}
			}




		  // DELETE
		  	public function delete($data){

		  		$db=parent::connect();

		  		if(is_int($data)){
		  			$sql= "DELETE FROM commandes_item WHERE id = ".$data;
		  			$query= $db -> prepare ($sql);
		  			$query -> execute ();

		  			return '<p class="green">Le produit a bien été supprimé de la commande.</p>';
		  		}

		  		return '<p class="red">Echec de la suppression du produit dans la commande.</p>';
		  	}


}


?>
