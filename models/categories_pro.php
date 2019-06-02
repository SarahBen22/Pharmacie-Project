<?php

require_once "./models/model.php";

class Categories_proModel extends Model {
	// attributs: correspondance à mes champs ds la bdd
	  private $id;
		private $type;


		public function createOne ($type){

		$db=parent::connect();

		 // on recherche si ce login est déjà utilisé par un autre membre
		 $sql = 'SELECT * FROM categories_pro WHERE type="$type)"';
		 $req = $db->prepare($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());// voir s il y a une erreur
		 $result=$req->execute();
		 $data =$req->fetchAll(); //recup les données


		 if (empty($data)) {// si rien ds le 1
				$sql = 'INSERT INTO categories VALUES(0, "$type")';
				$req= $db->prepare($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
				 $req->execute();

				return "la catégorie pro a bien été ajouté "; // la catégorie a été ajouté
		 }
		 else {
				$erreur = 'la catégorie pro n\'a pas été ajouté correctement';
				return $erreur;
		 }

		}

	public function getAll (){

		$db=parent::connect();
		$sql = "select * from categories_pro";
		$query = $db -> prepare($sql);
		$query -> execute();
		$categoriesList= $query -> fetchAll();

		return $categoriesList;
	}


	// GETTERS //
	  public function id() { return $this->id; }
	  public function type() { return $this->type; }


		// SETTERS // pour assigner des valeurs aux attributs
		  public function setId( $id ){
		    $id = (int) $id;

		    if($id > 0){
		      $this->id = $id;
		    }
		}

		  public function setType( $type ){
		    if(is_string($type)){
		      $this->type = $type;
		    }
		}



		//UPDATE
			public function update(Categories_proModel $catpro){

				$db=parent::connect();

				// On teste d'abord si l'utilisateur existe déjà ou si il est vide
				if($this->exists($catpro->type())){
					return '<p class="red">La\'catégorie'.$catpro->type().' est déjà enregistré.</p>';
				}
				elseif($catpro->type() == ''){
					return '<p class="red">La catégorie n\'a pas été enregistré correctement.</p>';
				}

				$sql= "UPDATE cat SET type= :type  WHERE id=".$catpro->id();
				$query= $db -> prepare ($sql);
				$query->bindValue(':type', $catpro->type());

				$result = $query -> execute ();

				if($result){	// Si $result est vrai alors la requête c'est bien déroulé
					return '<p class="green">La\'catégorie '.$catpro->type().' a bien été modifié.</p>';
				}
				else{
					return '<p class="red">Echec de la modification de la catégorie '.$catpro->type().'</p>';
				}
			}




		  // DELETE
		  	public function delete($data){

		  		$db=parent::connect();

		  		if(is_int($data)){
		  			$sql= "DELETE FROM categories_pro WHERE id = ".$data;
		  			$query= $db -> prepare ($sql);
		  			$query -> execute ();

		  			return '<p class="green">La catégorie pro a bien été supprimé.</p>';
		  		}

		  		return '<p class="red">Echec de la suppression de la catégorie pro.</p>';
		  	}








}


?>
