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

</div>


<div class="conteneur_deux">
<div class="admin_name">
  <p class="hi"> Welcome <?php echo $_SESSION['prenom']; ?>!</p>
</div>

<div class="acces_spaces">

<div class="space_produits"><a href="/PHARMACIE/index.php/admin_produits"><h3><br>Produits</h3></a></div>

<div class="space_categories"><a href="/PHARMACIE/index.php/admin_categories"><h3><br>Catégories & <br> Catégories_pro</h3></a></div>

<div class="space_professionnels"><a href="/PHARMACIE/index.php/admin_professionnels"><h3><br>Professionels</h3></a></div>

<div class="space_users"><a href="/PHARMACIE/index.php/admin_profil_client"><h3><br>Utilisateurs</h3></a></div>

</div>

</div>



</div>
