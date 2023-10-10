<?php

include("private/models/conexion.php");
require_once "private/controllers/plantilla.controlador.php";
require_once "private/models/plantilla.modelo.php";
require_once "private/models/rutas.php";
require_once "private/controllers/imagenes.controlador.php";
require_once "private/controllers/consulta.controlador.php";
require_once "private/models/imagenes.modelo.php";

$plantilla = ControladorPlantilla::ctrEstiloPlantilla();
$url = Ruta::ctrRuta();
$servidor = Ruta::ctrRutaServidor();

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="<?php echo $servidor . $plantilla["icono"] ?>">

  <!-- Bootstrap CSS -->
  <link href="<?php echo $url ?>css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $url ?>css/bootstrap.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $url ?>css/style.css">

  <!-- Sweet Alert -->
  <script src="<?php echo $url ?>plugins/sweetalert2/sweetalert2.all.js"></script>

  <title><?php echo $plantilla["nombreComercio"] ?></title>

  <!-- JAVASCRIPT GALERÍA -->

  <link rel="stylesheet" href="plugins/flickity/docs/flickity.css" media="screen">
  <script src="plugins/flickity/docs/flickity.pkgd.min.js"></script>

  <style type="text/css" media="screen">
    .slides section.has-dark-background,
    .slides section.has-dark-background h3 {
      color: #fff;
    }
    .slides section.has-light-background,
    .slides section.has-light-background h3 {
      color: #222;
    }
  </style>

</head>

<body>

  <main id="main">

    <?php

    $rutas = array();
    $ruta = null;
    $infoProducto = null;

    include "private/views/fixed/header.php";

    if (isset($_GET["ruta"])) {

      $rutas = explode("/", $_GET["ruta"]);
      $item = "ruta";
      $valor = $rutas[0];

      if (
        $_GET["ruta"] == "galeria" ||
        $_GET["ruta"] == "inicio"
      ) {

        include "private/views/" . $_GET["ruta"] . ".php";
        include "private/views/slider.php";
      } else if ($valor == "seccion" && isset($rutas[1])) {
        if (isset($rutas[3])) {
          include "private/views/error404.php";
        } else {
          include "private/views/" . $valor . ".php";
        }
      } else {
        include "private/views/error404.php";
      }
    } else {
      include "private/views/slider.php";
      include "private/views/inicio.php";
    }

    ?>

    <a href="https://wa.link/6ktswk">
      <img class="whatsapp" src="<?php echo $url . "img/Whatsapp.svg" ?>" alt="WhatsApp">
    </a>



  </main>

  <div class="footer-principal">
    <?php include "private/views/fixed/footer.php"; ?>
  </div>



  

</body>

<script>
  $(".btn-collapsibleNavbar").click(function() {
    $(".collapsibleNavbar").slideToggle(1000);
  })
</script>



</html>