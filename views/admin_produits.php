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
    <div class="sous_conteneur_un">

  <a href="/PHARMACIE/index.php/admin_produits/addproduct">
  <button type="button" class="btn btn-secondary" name="addproduct" id="addprod">Ajouter un Produit</button></a><br><br>


    <div class="container" id="table_pro">

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Catégories</th>
        <th>prix</th>
        <th>Image</th>
        <th>Editer</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
       <?php foreach($prodList as $prod){echo'
      <tr>
        <td>'.$prod['nom_produit'].'</td>
        <td>'.$prod['type'].'</td>
        <td>'.$prod['prix'].'</td>
        <td>'.$prod['image_produit'].'</td>
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

<?php if($action=='addproduct'){

?>

<div class="add_prod">

<h2 class="add">Ajouter un produit</h2>

<form action="admin_produits" method="POST">
<label for="Nom_prod">Nom du produit</label><br><br>
<input type="text" placeholder="Nom du produit" size="30" />

<br><br>
<label>Catégories</label><br><br>
<select name="categorie">
<option value="homeopathie" selected="selected">Homéopathie</option>
<option value="phytotherapie">Phytothérapie</option>
<option value="cosmetologie">Cosmétologie</option>
<option value="veterinaire">Vétérinaire</option>
<option value="materiel_medical">Matériel médical</option>
<option value="orthopedie">Orthopédie</option>
<option value="univers_bebe">Univers bébé</option>
</select>

<br><br>

<label for="prix_prod">Prix du produit</label><br><br>
<input type="text" placeholder="Prix du produit" size="30" />

<br><br>
<label>Image du produit</label><br><br>
<input name="upload" type="file" size="30" />
</form>
<br>
<button type="button" class="btn btn-secondary" name="addproduct" class="bout" >Ajouter</button>
</div>
<?php } ?>
