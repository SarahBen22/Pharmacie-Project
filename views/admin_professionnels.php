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
