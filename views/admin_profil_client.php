<?php
require_once "views/admin_navbar.php"
?>



<div class="conteneur">
  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="/PHARMACIE/index.php/admin"><h4>Dashboard</h4></a>
        </div>

        <ul class="list-unstyled components">

          <li class="active">
               <a href="/PHARMACIE/index.php/admin_produits"><p>Produits</p></a>

            </li>
          <li class="active">
               <a href="/PHARMACIE/index.php/admin_categories"><p>Catégories & <br> Catégories_pro</p></a>

            </li>


            <li class="active">
                <a href="/PHARMACIE/index.php/admin_professionnels">Professionnels</a>
            </li>
          <li class="active">
                <a href="/PHARMACIE/index.php/admin_profil_client">Utilisateurs</a>

            </li>

        </ul>
    </nav>


    <?php if(empty($action )|| $action=='delete_user'){?>
    <div class="sous_conteneur_trois">

 <a href="/PHARMACIE/index.php/admin_profil_client/adduser">
  <button type="button" class="btn btn-secondary" name="addproduct" id="adduser">Ajouter un Utilisateur</button></a><br><br>

<div class="container" id="table_pro">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Code postal</th>
        <th>Ville</th>
        <th>téléphone</th>
        <th>Email</th>
        <!-- <th>Mot de passe</th> -->
        <th>Admin</th>
        <th>Editer</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($usersList as $user){echo'
      <tr>
        <td>'.$user['nom'].'</td>
        <td>'.$user['prenom'].'</td>
        <td>'.$user['adresse'].'</td>
        <td>'.$user['code_postal'].'</td>
        <td>'.$user['ville'].'</td>
        <td>'.$user['telephone'].'</td>
        <td>'.$user['email'].'</td>
        <td>'.$user['admin'].'</td>
        <td><center><a href="/PHARMACIE/index.php/admin_profil_client/update_user/?id='.$user['id'].'">✏️</a></center></td>
        <td><center><a href="/PHARMACIE/index.php/admin_profil_client/delete_user/?id='.$user['id'].'">❌</a></center></td>
      </tr>
      ';
      }?>
    </tbody>
  </table>
 </div>
 </div>
</div>

<?php }
     else if($action=='adduser'|| $action=='update_user'){
?>
<div class="add_pro">

<h2 class="add">Ajouter un utilisateur</h2>

<form action="/PHARMACIE/index.php/admin_profil_client" method="POST">

<br><br>
<label for="Nom_pro">Nom</label><br><br>
<input type="text" name="nom" placeholder="Nom" size="30" value="<?php echo $nom; ?>" />

<br><br>

<label for="Prenom_pro">Prénom</label><br><br>
<input type="text" name="prenom"placeholder="Prénom" size="30" value="<?php echo $prenom; ?>" />

<br><br>
<label for="address_pro">Adresse</label><br><br>
<input type="text" name="adresse" placeholder="Adresse" size="30" value="<?php echo $adresse; ?>"/>

<br><br>
<label>Code postal</label><br><br>
<input type="text" name="code_postal" placeholder="Code postal" size="30" value="<?php echo $code_postal; ?>"/>

<br><br>
<label>Ville</label><br><br>
<input type="text" name="ville" placeholder="ville" size="30"value="<?php echo $ville; ?>" />

<br><br>
<label>Numéro de téléphone</label><br><br>
<input type="text" name="telephone" placeholder="Adresse" size="30"value="<?php echo $telephone; ?>" />



<br><br>
<label>Email</label><br><br>
<input type="email" name="email" placeholder="email" size="30" value="<?php echo $email; ?>" />

<br><br>
<label>Mot de passe</label><br><br>
<input type="password" name="mdp" placeholder="mot de passe" size="30" />

<br><br>
<label>Administrateur </label>

<input type="radio" name="admin" value="Oui" checked="checked"  /> Oui
<input type="radio" name="admin" value="Non" /> Non

<br>
<?php if($action == 'adduser'){//bouton pour l affichage du formulaire lorsque l'on ajoute un client
    echo '<button type="submit" class="btn btn-secondary" name="adduser" class="bout" >Ajouter</button>';
  }
  else if($action == 'update_user'){//bouton pour l affichage du formulaire lorsque l'on modifie un client
    echo '<button type="submit" class="btn btn-secondary" name="update_user" class="mod" >Modifier</button>';
  }?>

</form>

</div>
<?php } ?>
