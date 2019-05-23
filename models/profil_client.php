<?php


require_once "./models/model.php";

class profil_clientModel extends Model {
  // attributs: correspondance à mes champs ds la bdd
  private $id;
  private $nom;
  private $prenom;
  private $adresse;
  private $telephone;
  private $email;
  private $mot_de_passe;
  private $admin;

  // CONSTRUCTEUR //
  public function __construct (array $donnees){
    $this->hydrate($donnees);// faire une boucle sur les données
  }

  public function hydrate(array $donnees){
    foreach($donnees as $key => $value){
      $method = 'set'.ucfirst($key);//ligne qui appelle tous les setters
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function createOne (profil_clientModel $profil_client){

    $db=parent::connect();

    // on recherche si ce login est déjà utilisé par un autre membre
    $sql = 'SELECT * FROM profil_client WHERE email="$profil_client->email()"';
    $req = $db->prepare($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());// voir s il y a une erreur
    $result=$req->execute();
    $data =$req->fetchAll(); //recup les données


    if (empty($data)) {
      $sql = 'INSERT INTO profil_client VALUES(0,"'.$profil_client->nom().'","'.$profil_client->prenom().'","'.$profil_client->adresse().'","'.$profil_client->email().'", "'. password_hash($profil_client->mot_de_passe(),PASSWORD_DEFAULT).'",
      "'.$profil_client->admin().'")';
      $req= $db->prepare($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
      $req->execute();

      return "Félicitation, votre inscription a bien été prise en compte"; // utilisateur a été ajouté
    }
    else {
      $erreur = 'Un membre possède déjà ce pseudo.';
      return $erreur;
    }

  }

  public function getByData ($data){

    $db=parent::connect();
// pour trouver l objet avc le pseudo
    $sql= "select * from profil_client WHERE nom= :nom";
    $query = $db -> prepare($sql);
    $query->bindValue(':pseudo', $data);
    $query -> execute();
    $profil_client= $query -> fetch();

    if (empty($profil_client)){
      $sql= "select * from profil_client WHERE email= ".$data;
      $query = $db -> prepare($sql);
      $query -> execute();
      $profil_client= $query -> fetch();

      if(empty($profil_client)){

        return FALSE;
      }
      else{

        // On enregistre les valeurs dans l'objet actuel pour pouvoir renvoyer mon objet à la ligne 94
        $this->setId($profil_client['id']);
        $this->setNom($profil_client['nom']);
        $this->setPrenom($profil_client['prenom']);
        $this->setAdresse($profil_client['adresse']);
        $this->setTelephone($profil_client['telephone']);
        $this->setEmail($profil_client['email']);
        $this->setMot_de_passe($profil_client['mot_de_passe']);
        // $this->setAdmin($profil_client['admin']);
        return $this;


      }
    }
    else{
// si on le fait 2 fois c pck il y a 2 requetes (une par rapport au pseudo et une au mail)
      $this->setId($profil_client['id']);
        $this->setNom($profil_client['nom']);
        $this->setPrenom($profil_client['prenom']);
        $this->setAdresse($profil_client['adresse']);
        $this->setTelephone($profil_client['telephone']);
        $this->setEmail($profil_client['email']);
        $this->setMot_de_passe($profil_client['mot_de_passe']);
        // $this->setAdmin($profil_client['admin']);
      return $this;


    }

  }
  public function getAll(){


    $db=parent::connect();

    $sql = "select * from profil_client";
    $query = $db -> prepare($sql);
    $query -> execute();
    $profil_clientList= $query -> fetchAll();

    return $profil_clientList;
  }


  // GETTERS // obtenir ce qu on a ds l objet
  public function id() { return $this->id; }
  public function nom() { return $this->nom; }
  public function prenom() { return $this->prenom; }
  public function adresse() { return $this->adresse; }
  public function telephone() { return $this->telephone; }
  public function email() { return $this->email; }
  public function mot_de_passe() { return $this->mot_de_passe; }
  public function admin() { return $this->admin; }



  // SETTERS // pour assigner des valeurs aux attributs
  public function setId( $id ){
    $id = (int) $id;

    if($id > 0){
      $this->id = $id;
    }
  }



  public function setNom( $nom ){
    if(is_string($nom)){
      $this->nom = $nom;
    }
  }

  public function setPrenom( $prenom ){
    if(is_string($prenom)){
      $this->prenom = $prenom;
    }
  }



  public function setAdresse( $adresse ){
    if(is_string($adresse)){
      $this->adresse = $adresse;
    }
  }

  public function setTelephone( $telephone ){
    if(is_string($telephone)){
      $this->telephone = $telephone;
    }
  }

  public function setEmail( $email ){
    if(is_string($email)){
      $this->email = $email;
    }
  }


  public function setMot_de_passe( $mot_de_passe ){
    if(is_string($mot_de_passe)){
      $this->mot_de_passe = $mot_de_passe;
    }
  }


  public function setAdmin ($admin ){
    $this->admin = $admin;

  }


  //UPDATE
  public function update(Profil_clientModel $client){

    $db=parent::connect();

    $sql= "UPDATE profil_client SET   nom = :nom, prenom = :prenom,  email= :email,  admin= :admin WHERE id=".$client->id();
    $query= $db -> prepare ($sql);

    // bindvalue= valeur qui permet de remplacer un objet ds la requete
    $query->bindValue(':nom', $client->nom());
    $query->bindValue(':prenom', $client->prenom());
    $query->bindValue(':adresse', $client->adresse());
    $query->bindValue(':telephone', $client->telephone());
    $query->bindValue(':email', $client->email());
    $query->bindValue(':mot_de_passe', $client->mot_de_passe());
    $query->bindValue(':admin', $client->admin());


    $result = $query -> execute ();

    if($result){	// Si $result est vrai alors la requête c'est bien déroulé
      return '<p class="green">L\'utilisateur '.$client->nom().' a bien été modifié.</p>';
    }
    else{
      return '<p class="red">Echec de la modification de l\'utilisateur '.$client->nom().'</p>';
    }
  }

  // la fonction exist sert à voir si l utilisateur existe dejà
  public function exists($data){
    $db=parent::connect();

    if(is_string($data)){
      $sql = "SELECT * FROM profil_client WHERE pseudo ='".$data."'";
      $query = $db->prepare($sql);
      $query ->execute();
      $listClient = $query->fetchAll();

      return !empty($listClient); // Retourn Vrai si un Client avec le nom $data existe
    }

    return false;
  }

  // DELETE
  public function delete($data){

    $db=parent::connect();

    if(is_int($data)){
      $sql= "DELETE FROM profil_client WHERE id = ".$data;
      $query= $db -> prepare ($sql);
      $query -> execute ();

      return '<p class="green">L\'utilisateur a bien été supprimé.</p>';
    }

    return '<p class="red">Echec de la suppression de l\'utilisateur.</p>';
  }



}



?>
