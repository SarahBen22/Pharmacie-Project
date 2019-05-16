<?php
require_once "navbar.php"
?>

<div class="row">

<div id="carouselExampleIndicators" class="carousel slide offset-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-80 " height="300px" src="img/homeo.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-98" height="300px" src="img/phyto.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" height="300px" src="img/cosmeto.jpg" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-80" height="300px" src="img/ortho.jpg" alt="Fourth slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-80 " height="300px" src="img/vet.jpg" alt="Fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<br><br>
<div class="txtpresent">
<p class="txt"> TEXTE DE PRESENTATION<br><br>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo enim dolore tenetur qui rem sequi illo soluta similique neque, voluptatum, reiciendis aliquam, ipsa minus sed voluptate unde voluptatem consequuntur quibusdam!
Laborum quas vero quam reprehenderit obcaecati, neque error.<br><br> Nisi, vel reprehenderit, esse sint laudantium nesciunt rem perspiciatis possimus mollitia hic incidunt consectetur temporibus. Temporibus itaque debitis ipsa accusantium explicabo nam?
Aliquid quidem eum, ipsa quam beatae voluptatibus necessitatibus saepe illo magnam natus illum, at facilis similique pariatur optio explicabo autem itaque?
<br><br>
  Reprehenderit sunt eius ipsam eveniet minus autem corrupti dignissimos.
Praesentium cum ea cupiditate, vel illum fugiat voluptatibus totam alias consectetur minus sunt iste eos nemo, quod repudiandae natus fugit asperiores debitis minima suscipit temporibus quisquam molestiae autem saepe! Perferendis?
Incidunt deserunt recusandae adipisci quam iste, neque et sint similique necessitatibus repudiandae aliquid, commodi voluptatibus id molestiae! Pariatur natus, quam ipsam eum est rem recusandae amet illum accusamus porro culpa!


</p>
</<div>
<br><br>

<h2> Nos produits du moment</h2>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/neutre.png" width="20%" height="60%">
    <div class="card-body">
      <h4 class="card-title">Produit 1</h4>
      <p class="card-text">blablablalablabla.</p>
       <a href="#" class="btn btn-primary">Plus d'informations</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="img/neutre.png" width="30%" height="60%">
    <div class="card-body">
      <h4 class="card-title">Produit 2</h4>
      <p class="card-text">blablablalablabla.</p>
       <a href="#" class="btn btn-primary">Plus d'informations</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="img/neutre.png" width="30%" height="60%">
    <div class="card-body">
      <h4 class="card-title">Produit 3</h4>
      <p class="card-text">blablablalablabla.</p>
     <a href="#" class="btn btn-primary">Plus d'informations</a>
    </div>
  </div>
</div>

<?php
require_once "footer.php"
?>