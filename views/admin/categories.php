<?php
require_once "views/admin_navbar.php"
?>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="/PHARMACIE/index.php/admin"><h3>Dashboard</h3></a>
        </div>

        <ul class="list-unstyled components">
           <a href="/PHARMACIE/index.php/produits"><p>Produits</p></a>
            <li class="active">
                <a href="/PHARMACIE/index.php/categories"><p>Catégories</p></a>

            </li>
            <li>
                <a href="/PHARMACIE/index.php/commandes">Commandes</a>
            </li>
            <li>
                <a href="/PHARMACIE/index.php/profil_client">Utilisateurs</a>

            </li>

        </ul>
    </nav>

</div>
