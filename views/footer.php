<footer>


<div class="footer">



<div class="contact_footer">
<p class="margin_top">Pharmacie de la mairie d'Athis-mons<br>
16 rue Valentin Conrart<br>
91200 Athis-Mons<br>
01 69 38 44 26</p>
</div>
<div class="horaires_footer">

<p class="margin_top">Du Lundi au Vendredi : <br>
      9h-13h 14H30- 20h <br>
      Le Samedi: 9h-13h 14h30- 19h</p>
</div>



<div class="contact_foot">

<p class="margin_top"> Mentions légales</p>
 <a href="/PHARMACIE/index.php/contacts">Nous contacter</a>
 <?php if (isset($_SESSION['admin']) && $_SESSION['admin']==1) echo'<a href="/PHARMACIE/index.php/admin">Administrateurs</a>';?>
<!-- double condition: 1 si la variable $_SESSION admin est définis et la 2: si admin=1 ds la BDD -->
</div>
</div>

</footer>
