<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container"> 
      <!-- Brand --> 
      <a class="navbar-brand mr-auto logo" href="<?php echo $url?>inicio"><img src="<?php echo $servidor.$plantilla["logo"]?>" alt="<?php echo $plantilla["nombreComercio"]?>" /></a> 
      <!-- images/logo.png -->
      
      <!-- Toggler/collapsibe Butºton -->
      <button class="navbar-toggler btn-collapsibleNavbar" type="button" data-toggle="collapse"> <i class="fas fa-bars"></i> </button>
      
      <!-- Navbar links -->
      <div class="collapse navbar-collapse collapsibleNavbar">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="<?php echo $url?>inicio#nosotros">Nosotros</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $url?>inicio#sustentabilidad">Sustentabilidad</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $url?>inicio#productos">Productos</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $url?>inicio#contacto">Contacto</a> </li>
        </ul>
  
      </div>
    </div>
  </nav>