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
               <a href="/PHARMACIE/index.php/produits"><p>Produits</p></a>

            </li>
          <li class="active">
               <a href="/PHARMACIE/index.php/categories"><p>Catégories</p></a>

            </li>

          <li class="active">
                <a href="/PHARMACIE/index.php/commandes">Commandes</a>
            </li>
          <li class="active">
                <a href="/PHARMACIE/index.php/profil_client">Utilisateurs</a>

            </li>

        </ul>
    </nav>

</div>

<div class="admin_name">
  <p class="hi"> Welcome ADMIN !
</p>
</div>

<div class="acces_pages"></div>
<a href="/PHARMACIE/index.php/profil_client">
<button class="products_btn"></button>
</a>
</div>
