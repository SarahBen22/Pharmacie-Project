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
               <a href="/PHARMACIE/index.php/admin_categories"><p>Catégories</p></a>

            </li>

          <li class="active">
                <a href="/PHARMACIE/index.php/admin_commandes">Commandes</a>
            </li>
          <li class="active">
                <a href="/PHARMACIE/index.php/admin_profil_client">Utilisateurs</a>

            </li>

        </ul>
    </nav>

</div>


<div class="conteneur_deux">
<div class="admin_name">
  <p class="hi"> Welcome ADMIN !</p>
</div>

<div class="acces_spaces">

<div class="space_produits"><a href="/PHARMACIE/index.php/admin_produits"><h1>Produits</h1></a></div>

<div class="space_categories"><a href="/PHARMACIE/index.php/admin_categories"><h1>Catégories</h1></a></div>

<div class="space_commandes"><a href="/PHARMACIE/index.php/admin_commandes"><h1>Commandes</h1></a></div>

<div class="space_users"><a href="/PHARMACIE/index.php/admin_profil_client"><h1>Utilisateurs</h1></a></div>

</div>

</div>



</div>
