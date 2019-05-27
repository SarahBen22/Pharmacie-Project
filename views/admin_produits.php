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
      <tr>
        <td>crème pour les mains</td>
        <td>Doe</td>
        <td>30€</td>
        <td>src="/PHARMACIE/img/...1.png"</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>15€</td>
        <td>src="/PHARMACIE/img/...1.png"</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>80€</td>
        <td>src="/PHARMACIE/img/...1.png"</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
    </tbody>
  </table>
</div>

    </div>
</div>
