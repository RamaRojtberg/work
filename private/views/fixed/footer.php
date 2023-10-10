<!-- FOOTER -->


<footer class="container-fluid footer-principal">

  <div class="container">

    <div class="row">

      <!-- REDES SOCIALES -->

      <div class="col-md-3 footer1 d-flex wow bounceInLeft" data-wow-delay=".25s">

        <div class="flex-wrap redes">

          <div class="redSocial">
            
          <?php
        
          $redesSociales = json_decode($plantilla["redesSociales"], true);

          foreach($redesSociales as $key => $value){
            if($value["activo"] == 1){
              echo '<a href="'.$value["url"].'"><i class="'.$value["estilo"].' fab '.$value["red"].'" style="padding:5px"></i></a>';
            }
          }
          
          ?>

          </div>

          <div>
            <!-- <img src="</*?php echo $url ?>*/images/Logos_Husqvarna/logo_escalonado.png" alt="Sport Adventure" style="width: 170px;"> -->
          </div>
          
          <p>¡Seguinos en nuestras redes sociales y enterate de las últimas noticias!</p>
        </div>
        
      </div>

      <!-- CONSULTA -->

      <div class="col-md-6 footer2 wow bounceInUp" data-wow-delay=".25s" id="contacto">
        <div class="login-box">
          <h2>Realiza una consulta</h2>
          <form class="consulta" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="user-box">
              <input type="text" name="nombreConsulta" required>
              <label>Nombre</label>
            </div>
            <div class="user-box">
              <input type="email" name="mailConsulta" required>
              <label>Email</label>
            </div>
            <div class="user-box">
              <input type="text" name="consulta" required>
              <label>Consulta</label>
            </div>
            <div class="btn-env">
              <button type="submit" name="enviarConsulta">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Enviar
              </button>
              
            </div>
            
            <?php

            $comMail = $plantilla["mail"];
            $comPas = $plantilla["contrasena"];
            
            $consulta = ControladorConsulta::ctrEnviarConsultaFooter($comMail, $comPas);
              
            ?>

          </form>
        </div>
      </div>
      

      <!-- DATOS -->

      <div class="col-md-3 footer3 wow bounceInRight" data-wow-delay=".25s">
        
        <h5 style="margin-bottom:50px">CONTACTO</h5>

        <h5>DIRECCIÓN</h5>
        <p><?php echo $plantilla["direccion"] ?></p>
        <h5>TELÉFONO</h5>
        <p><?php echo $plantilla["telefono"] ?></p>
        <h5>EMAIL</h5>
        <p>info@sportadventure.com.ar</p>
        <!-- <p><?php /*echo $plantilla["mail"]*/ ?></p> -->

      </div>

    </div>

  </div>

</footer>