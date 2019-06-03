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


    <?php global $action; echo $action; if(true){?>
    <div class="sous_conteneur_trois">

 <a href="/PHARMACIE/index.php/admin_profil_client/addusers">
  <button type="button" class="btn btn-secondary" name="addproduct" id="addusers">Ajouter un Utilisateur</button></a><br><br>

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
        <th>Mot de passe</th>
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
        <td>'.$user['mot_de_passe'].'</td>
        <td>'.$user['admin'].'</td>
        <td><center>✏️</center></td>
        <td><center>❌</center></td>
      </tr>

      ';
      }?>
    </tbody>
  </table>
 </div>
 </div>
</div>

<?php } ?>

<?php if($action=='addusers'){

?>
<div class="add_pro">

<h2 class="add">Ajouter un utilisateur</h2>

<form>

<br><br>
<label for="Nom_pro">Nom</label><br><br>
<input type="text" placeholder="Nom" size="30" />

<br><br>

<label for="Prenom_pro">Prénom</label><br><br>
<input type="text" placeholder="Prénom" size="30" />

<br><br>
<label for="address_pro">Adresse</label><br><br>
<input type="text" placeholder="Adresse" size="30" />

<br><br>
<label>Numéro de téléphone</label><br><br>
<input type="text" placeholder="Adresse" size="30" />

<br><br>
<label>Email</label><br><br>
<input type="email" placeholder="email" size="30" />

<br><br>
<label>Mot de passe</label><br><br>
<input type="password" placeholder="mot de passe" size="30" />

<br><br>
<label>Administrateur </label>
<input type="radio" name="choix" value="Oui" checked="checked" /> Oui
<input type="radio" name="choix" value="Non" /> Non


</form>
<br>
<button type="button" class="btn btn-secondary" name="addproduct" class="bout" >Ajouter</button>
</div>
<?php } ?>
