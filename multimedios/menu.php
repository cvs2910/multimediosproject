   <div id="header">
       
       <div class="topbar"></div>


      <div id="menu">
        
      <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="./images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
                <?php if ($pages == 'admin') { ?>
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                  
                  <li class="active"><a href="index.php">Inicio</a></li>
                  <li class="active"><a href="insert.php">Agregar Ruta</a></li>
                 <li ><a href="horario_tarifas.php">Horarios y Rutas</a></li>
                 <li ><a href="closesession.php">Cerrar sesion</a></li>
             
                  </ul>
            </div>
                <?php } else{?>
              
              
            
              
              
              <?php if ($pages == 'horarios_tarifas') { ?>
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                  
                  <li class="active"><a href="index.php" onclick="ga('send', 'event', 'Home', 'click','btnStart2')">Inicio</a></li>
                 <li ><a href="index.php#nosotros" onclick="ga('send', 'event', 'Home', 'click','btnUs2')">Nosotros</a></li>
                 <li ><a href="index.php#terminales" onclick="ga('send', 'event', 'Home', 'click','btnTerminals2')">Terminales</a></li>
                 <li ><a href="index.php#noticias" onclick="ga('send', 'event', 'Home', 'click','btnNews2')">Noticias</a></li>
                 <li ><a href="#schedule-content" onclick="ga('send', 'event', 'Home', 'click','btnSchedule2')">Horarios y Rutas</a></li>
                 <li ><a href="index.php#contact" onclick="ga('send', 'event', 'Home', 'click','btnContact2')">Contacto</a></li>
                  </ul>
            </div>
                <?php } else { ?>
              <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                  <li class="active"><a href="#home" onclick="ga('send', 'event', 'Home', 'click','btnStart')">Inicio</a></li>
                 <li ><a href="#nosotros" onclick="ga('send', 'event', 'Home', 'click','btnUs')">Nosotros</a></li>
                 <li ><a href="#terminales" onclick="ga('send', 'event', 'Home', 'click','btnTerminals')">Terminales</a></li>
                 <li ><a href="#noticias" onclick="ga('send', 'event', 'Home', 'click','btnNews')">Noticias</a></li>
                 <li ><a href="horario_tarifas.php" onclick="ga('send', 'event', 'Home', 'click','btnSchedule')">Horarios y Rutas</a></li>
                 <li ><a href="#contact" onclick="ga('send', 'event', 'Home', 'click','btnContact')">Contacto</a></li>
                  </ul>
            </div>
                <?php } ?>
              
              <?php } ?>
                          
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>


      </div>

         

      </div>
