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


    <div class="sous_conteneur_un">

  <a href="/PHARMACIE/index.php/addproduct/">
  <button type="button" class="btn btn-secondary" name="addproduct" id="addprod">Ajouter un Produit</button></a><br><br>




    <table class="table table-striped table-sm" id="table_prod">
  <thead>
  <tr>
  <!-- <th>Id</th> -->
  <th>Nom</th>
  <th>Catégories</th>
  <th>Prix</th>
  <th>Stock</th>
  <th>Image_produit</th>

  <th>Editer</th>
  <th>Supprimer</th>
  </tr>
  </thead>
</table>
    </div>
</div>
