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


<?php
require_once "footer.php"
?>
