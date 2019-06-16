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
    <div class="sous_conteneur_quatre">
      <a href="/PHARMACIE/index.php/admin_categories/addcat">
  <button type="button" class="btn btn-secondary" name="addproduct" id="addcat">Ajouter une Catégorie</button></a><br><br>


    <div class="container" id="cate">

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Type</th>
        <th>Editer</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($catList as $cat){echo'
      <tr>
        <td>'.$cat['type'].'</td>
        <td><center>✏️</center></td>
        <td><center>❌</center></td>
      </tr>

      ';
      }?>

    </tbody>
  </table>
</div>
    </div>
<?php } ?>

<?php if($action=='addcat'){

?>

<div class="add_cat">

<h2 class="add">Ajouter une catégorie</h2>

<form action="admin_categories" methode="POST">


<br><br>
<label for="type">Nouvelle catégorie</label><br><br>
<input type="text" placeholder="nouvelle catégorie" size="30" />


</form>
<br>
<button type="button" class="btn btn-secondary" name="addproduct" class="bout" >Ajouter</button>
</div>
<?php } ?>






<?php global $action; echo $action; if(true){?>
     <div class="sous_conteneur_cinq">
       <a href="/PHARMACIE/index.php/admin_categories/addcatpro">
  <button type="button" class="btn btn-secondary" name="addproduct" id="addcatpro">Ajouter une Catégorie Professionnelle</button></a><br><br>


    <div class="container" id="cate_pro">

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Type</th>
        <th>Editer</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($catproList as $catpro){echo'
      <tr>
        <td>'.$catpro['type'].'</td>
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

<?php if($action=='addcatpro'){

?>
<div class="add_cat">

<h2 class="add">Ajouter une catégorie professionnelle</h2>

<form action="admin_" method="POST">


<br><br>
<label for="type">Nouvelle catégorie</label><br><br>
<input type="text" placeholder="nouvelle catégorie" size="30" />


</form>
<br>
<button type="button" class="btn btn-secondary" name="addproduct" class="bout" >Ajouter</button>
</div>
<?php } ?>
