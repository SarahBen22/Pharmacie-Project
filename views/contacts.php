<?php require_once "navbar.php" ?>

<div class="row-container">

  <div id="box">
    <div class="coordonnees">
      Pharmacie de la mairie d'Athis-mons <br>
      Numéro de téléphone: 01 69 38 44 26<br>
      Adresse: 16 rue Valentin Conrart 91200 Athis-Mons
    </div>
    <div class="horaires">
      Du Lundi au Vendredi : <br>
      9h-13h 14H30- 20h <br>
      Le Samedi: 9h-13h 14h30- 19h
    </div>
    <div class="map-wrap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d782.749056093779!2d2.388033278505519!3d48.70847212847801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67590a13fb673%3A0xe52f41d4e31c2a2a!2sPharmacie+de+la+Mairie!5e0!3m2!1sfr!2sfr!4v1556546928968!5m2!1sfr!2sfr" allowfullscreen class="map"></iframe>
    </div>
  </div>



  <div class="formu">
    <form name="form1" action="contacts.php" method="post">
      <h3>Envoyer un message</h3>
      <br>
      <label>Nom
        <input name="Nom" type="text" placeholder="Compléter votre nom" size="40" />
      </label>
      <br><br>
      <label>Prénom
        <input name="prenom" type="text" placeholder="Compléter votre prénom" size="40" />
      </label>
      <br><br>
      <label>Adresse mail
        <input name="email" type="email" placeholder="Ecrivez votre adresse email" size="40" />
      </label>
      <br><br>
      <label for="msg"> Votre message :</label> <br>
      <textarea name="commentaire" placeholder="Ecrivez votre message" cols="45" rows="5"></textarea>
      <br><br>
      <input type="submit" name="envoi" value="Envoyer ma demande" />
      <input type="reset" name="effacer" value="Annuler l'envoie" />
    </form>
  </div>

</div>
