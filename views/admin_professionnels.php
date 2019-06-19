<?php
require_once "views/admin_navbar.php";

if (isset($action)){
 echo '<script>';
  echo 'console.log('. json_encode("debug"+ $action) .')';
  echo '</script>';
}
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


<?php if(empty($action)){?>
<div class="sous_conteneur_deux">


    <a href="/PHARMACIE/index.php/admin_professionnels/addpro">
  <button type="button" class="btn btn-secondary" name="addproduct" id="addprod">Ajouter un Professionnel</button></a><br><br>

<div class="container" id="prof">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Catégorie</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>adresse</th>
        <th>téléphone</th>
        <th>Email</th>
        <th>Editer</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach($prosList as $pros){echo'
      <tr>
        <td>'.$pros['type'].'</td>
        <td>'.$pros['nom'].'</td>
        <td>'.$pros['prenom'].'</td>
        <td>'.$pros['adresse'].'</td>
        <td>'.$pros['telephone'].'</td>
        <td>'.$pros['email'].'</td>
        <td><center><a href="admin_professionnel/update_pro/?id='.$pros['id'].'">✏️</center></a></td>
        <td><center>❌</center></td>
      </tr>

      ';
      }?>

    </tbody>
  </table>
</div>
</div>
</div>

<?php }

else if($action=='addpro' || $action=='update_pro') {
  ?>
<div class="add_pro">

<h2 class="add">Ajouter un professionnel</h2>

<form action="/PHARMACIE/index.php/admin_professionnels" method="POST">

<br><br>
<label>Catégories</label><br><br>
<select name="categorie_pro">
<option value="infirmiere" selected="selected">Infirmière</option>
<option value="medecin">Médecin généraliste</option>
<option value="osteopathe">Ostéopathe</option>
<option value="dentiste">Dentiste</option>
<option value="orl">O.R.L</option>
<option value="ophtalmo">Ophtalmo</option>
<option value="podologue">Podologue</option>
</select>

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

<br><br><br>

<?php if($action == 'addpro'){//bouton pour l affichage du formulaire lorsque l'on ajoute un client
    echo '<button type="submit" class="btn btn-secondary" name="addpro" class="bout" >Ajouter</button>';
  }
  else if($action == 'update_pro'){//bouton pour l affichage du formulaire lorsque l'on modifie un client
    echo '<button type="submit" class="btn btn-secondary" name="update_pro" class="mod" >Modifier</button>';
  }?>
</form>


</div>
<?php } ?>
