<?php

require_once "./models/model.php";

class MessagesModel extends Model {
	// attributs: correspondance à mes champs ds la bdd
	  private $id;
		private $pseudo_id;
	  private $commentaires;


		public function createOne ($pseudo_id, $commentaires){

		$db=parent::connect();

		 // on recherche si ce login est déjà utilisé par un autre membre
		 $sql = 'SELECT * FROM panier WHERE pseudo_id= '.$pseudo_id;
		 $req = $db->prepare($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());// voir s il y a une erreur
		 $result=$req->execute();
		 $data =$req->fetchAll(); //recup les données


		 if (empty($data)) {
				$sql = 'INSERT INTO panier VALUES(0, "'.$pseudo_id.'","'.$commentaires.'")';
				$req= $db->prepare($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
				 $req->execute();

				return "le message selectionné a bien été ajouté "; // utilisateur a été ajouté
		 }
		 else {
				$erreur = 'le message selectionné n\'a pas été ajouté correctement';
				return $erreur;
		 }

		}

	public function getAll (){

		$db=parent::connect();

		$sql = "select * from messages
		LEFT JOIN profil_client on messages.pseudo_id = profil_client.id";
		$query = $db -> prepare($sql);
		$query -> execute();
		$panierList= $query -> fetchAll();

		return $panierList;
	}

	// GETTERS //
	  public function id() { return $this->id; }
	  public function pseudo_id() { return $this->pseudo_id; }
    public function commentaires() { return $this->commentaires; }


		// SETTERS // pour assigner des valeurs aux attributs
		  public function setId( $id ){
		    $id = (int) $id;

		    if($id > 0){
		      $this->id = $id;
		    }
		}

		  public function setPseudo_id( $pseudo_id ){
		    if(is_int($pseudo_id)){
		      $this->pseudo_id = $pseudo_id;
		    }
		}

    public function setCommentaires( $commentaires ){
      if(is_int($commentaires)){
        $this->commentaires= $commentaires;
      }
  }

		//UPDATE
			public function update(MessagesModel $mes){

				$db=parent::connect();

				// On teste d'abord si l'utilisateur existe déjà ou si il est vide
				if($this->exists($mes>pseudo_id())){
					return '<p class="red">Le message '.$mes->nom().' a déjà été ajouté.</p>';
				}
				elseif($mes->nom() == ''){
					return '<p class="red">Le message est vide.</p>';
				}

				$sql= "UPDATE pan SET pseudo_id = :pseudo_id, commentaires = :commentaires WHERE id=".$mes->id();
				$query= $db -> prepare ($sql);
				$query->bindValue(':pseudo_id', $mes->pseudo_id());
				$query->bindValue(':commentaires', $mes->commentaires());

				$result = $query -> execute ();

				if($result){	// Si $result est vrai alors la requête c'est bien déroulé
					return '<p class="green">Le message'.$mes->nom().' a bien été modifié.</p>';
				}
				else{
					return '<p class="red">Echec de la modification du message '.$mes->nom().'</p>';
				}
			}




		  // DELETE
		  	public function delete($data){

		  		$db=parent::connect();

		  		if(is_int($data)){
		  			$sql= "DELETE FROM panier WHERE id = ".$data;
		  			$query= $db -> prepare ($sql);
		  			$query -> execute ();

		  			return '<p class="green">Le message a bien été supprimé.</p>';
		  		}

		  		return '<p class="red">Echec de la suppression du message.</p>';
		  	}


}


?>
