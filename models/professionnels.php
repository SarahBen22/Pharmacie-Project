<?php

require_once "./models/model.php";

class professionnelsModel extends Model {
	// attributs: correspondance à mes champs ds la bdd

		private $id;
	  private $id_categories_pro;
		private $nom;
		private $prenom;
		private $adresse;
		private $telephone;
		private $email;

		public function createOne ($id_categories_pro, $nom,$prenom,$adresse,$telephone,$email){

		$db=parent::connect();

		 // on recherche si ce login est déjà utilisé par un autre membre
		 $sql = 'SELECT * FROM professionnels_sante WHERE nom= '.$nom;
		 $req = $db->prepare($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());// voir s il y a une erreur
		 $result=$req->execute();
		 $data =$req->fetchAll(); //recup les données


		 if (empty($data)) {
				$sql = 'INSERT INTO professionnels_sante VALUES(0,"'.$id_categories_pro.'","'.$nom.'","'.$prenom.'","'.$adresse.'","'.$telephone.'","'.$email.'")';
				$req= $db->prepare($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
				 $req->execute();

				return "le professionnel selectionné a bien été ajouté "; // utilisateur a été ajouté
		 }
		 else {
				$erreur = 'le professionnel selectionné n\'a pas été ajouté correctement';
				return $erreur;
		 }

		}

	public function getAll (){

		$db=parent::connect();

		$sql = "select * from professionnels_sante
		LEFT JOIN categories_pro on professionnels_sante.id_categories_pro = categories_pro.id ";
		$query = $db -> prepare($sql);
		$query -> execute();
		$profesioList= $query -> fetchAll();

		return $profesioList;
	}

public function getByType (){

		$db=parent::connect();

		$sql = "select * from professionnels_sante
		LEFT JOIN categories_pro on professionnels_sante.id_categories_pro = categories_pro.id ";
		$query = $db -> prepare($sql);
		$query -> execute();
		$profeList= $query -> fetchAll();

		return $profeList;
	}
	// GETTERS //
		public function id() { return $this->id; }
	  public function id_categories_pro() { return $this->id_categories_pro; }
	  public function nom() { return $this->nom; }
    public function prenom() { return $this->prenom; }
	  public function adresse() { return $this->adresse; }
		public function telephone() { return $this->telephone; }
		public function email() { return $this->email; }
		// SETTERS // pour assigner des valeurs aux attributs


		public function setId( $id ){
		    $id = (int) $id;

		    if($id > 0){
		      $this->id = $id;
		    }
		}

		  public function setId_categories_pro( $id_categories_pro ){
		    if(is_int($id_categories_pro)){
		      $this->id_categories_pro = $id_categories_pro;
		    }
		}

    public function setNom( $nom ){
      if(is_int($nom)){
        $this->nom= $nom;
      }
  }

	public function setPrenom( $prenom ){
		if(is_int($prenom)){
			$this->prenom = $prenom;
		}

	}


		public function setAdresse( $adresse ){
		if(is_int($adresse )){
			$this->prenom = $adresse ;
		}

	}

	public function setTelephone( $telephone ){
		if(is_int($telephone )){
			$this->telephone = $telephone ;
		}

	}


		public function setEmail( $email ){
		if(is_int($email )){
			$this->email= $email ;
		}

	}

		//UPDATE
			public function update(professionnelsModel $pro){

				$db=parent::connect();

				// On teste d'abord si l'utilisateur existe déjà ou si il est vide
				if($this->exists($pro>nom())){
					return '<p class="red">Le professionnel '.$pro->nom().' a déjà été ajouté.</p>';
				}
				elseif($pro->nom() == ''){
					return '<p class="red">Il n a pas été ajouté.</p>';
				}

				$sql= "UPDATE pro SET id_categories_pro= :id_categories_pro, nom = :nom, prenom = :prenom, adresse = :adresse WHERE  id=".$pro->id();
				$query= $db -> prepare ($sql);
        $query->bindValue(':id_categories_pro', $pro->id_categories_pro());
        $query->bindValue(':nom', $pro->nom());
				$query->bindValue(':prenom', $pro->prenom());
				$query->bindValue(':adresse', $pro->adresse());
				$query->bindValue(':telephone', $pro->telephone());
				$query->bindValue(':email', $pro->email());

				$result = $query -> execute ();

				if($result){	// Si $result est vrai alors la requête c'est bien déroulé
					return '<p class="green">Le professionnel'.$pro->nom().' a bien été modifié.</p>';
				}
				else{
					return '<p class="red">Echec de la modification du professionnel '.$pro->nom().'</p>';
				}
			}




		  // DELETE
		  	public function delete($data){

		  		$db=parent::connect();

		  		if(is_int($data)){
		  			$sql= "DELETE FROM professionnels_sante WHERE id = ".$data;
		  			$query= $db -> prepare ($sql);
		  			$query -> execute ();

		  			return '<p class="green">Le produit a bien été supprimé de la commande.</p>';
		  		}

		  		return '<p class="red">Echec de la suppression du produit dans la commande.</p>';
		  	}


}


?>
