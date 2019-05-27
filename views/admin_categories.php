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

    <div class="sous_conteneur_quatre">
      <a href="/PHARMACIE/index.php/addcat/">
  <button type="button" class="btn btn-secondary" name="addproduct" id="addcat">Ajouter une Catégorie</button></a><br><br>


    <div class="container" id="table_pro">

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Type</th>
        <th>Editer</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>crème pour les mains</td>
        <td>Doe</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
    </tbody>
  </table>
</div>
    </div>

     <div class="sous_conteneur_cinq">
       <a href="/PHARMACIE/index.php/addcatpro/">
  <button type="button" class="btn btn-secondary" name="addproduct" id="addcatpro">Ajouter une Catégorie Professionnelle</button></a><br><br>


    <div class="container" id="table_pro">

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Type</th>
        <th>Editer</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>crème pour les mains</td>
        <td>Doe</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td><center>✏️<center></td>
        <td><center>❌</center></td>
      </tr>
    </tbody>
  </table>
</div>
     </div>
</div>
