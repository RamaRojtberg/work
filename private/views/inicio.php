
<?php

$textos = ControladorImagenes::ctrMostrarImagenes("textos");

$imagenes = ControladorImagenes::ctrMostrarImagenes("imagenes");

?>

<div id="modelos" class="container-fluid sobre-nosotros pl-0 pr-0 pt-4 parallax-window" data-parallax="scroll" data-image-src="<?php echo $servidor.$imagenes[3]["rutaImg"]; ?>"><!-- 1700 * 670 -->
  <div class="container">
    <div class="col-sm-6 offset-sm-6" style="height: 300px">
    </div><br>
  </div>
  
</div>

<!-- NOSOTROS -->

<div class="container-fluid texto2-contenedor" id="nosotros">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4 class="wow fadeInRightBig" style="margin-bottom: 0px;">
          <?php 
          if($textos[0]["texto"] != ""){
            echo $textos[0]["texto"];
          }
          ?>
        </h4>
        <h2 class="wow fadeInLeftBig">
          <?php 
          if($textos[1]["texto"] != ""){
            echo $textos[1]["texto"];
          }
          ?>
        </h2>
        <p class="wow fadeInRightBig">
          <?php 
          if($textos[2]["texto"] != ""){
            echo $textos[2]["texto"];
          }
          ?>
        </p>

        </p>
      </div>
      <div class="col-md-6">
        <figure class="wow fadeInUpBig imgFabricantes"> <img src="<?php echo $servidor.$imagenes[2]["rutaImg"]; ?>" alt="<?php echo $servidor.$imagenes[2]["nombreImg"]; ?>" class="img-fluid" /> </figure> <!-- 2040 * 2430 -->
      </div>
    </div>
  </div>
</div>


<!-- MODELOS -->

<div id="modelos" class="container-fluid sobre-nosotros pl-0 pr-0 pt-4 parallax-window" data-parallax="scroll" data-image-src="<?php echo $servidor.$imagenes[3]["rutaImg"]; ?>"><!-- 1700 * 670 -->
  <div class="container">
    <div class="col-sm-6 offset-sm-6" style="height: 300px">
    </div><br>
  </div>
  
</div>

<!-- CARDS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/wow.js"></script>
<script src="js/main.js"></script>