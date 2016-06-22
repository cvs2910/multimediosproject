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
                 <li ><a href="insert.php">Agregar Ruta</a></li>
                 <li ><a href="horario_tarifas.php">Horarios y Rutas</a></li>
                 <li ><a href="closesession.php">Cerrar sesion</a></li>
             
                  </ul>
            </div>
                <?php } else{?>
              
              
            
              
              
              <?php if ($pages == 'horarios_tarifas') { ?>
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                  
                  <li class="active"><a href="index.php">Inicio</a></li>
                 <li ><a href="index.php#nosotros">Nosotros</a></li>
                 <li ><a href="index.php#terminales">Terminales</a></li>
                 <li ><a href="index.php#noticias">Noticias</a></li>
                 <li ><a href="#schedule-content">Horarios y Rutas</a></li>
                 <li ><a href="index.php#contact">Contacto</a></li>
                  </ul>
            </div>
                <?php } else { ?>
              <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                  <li class="active"><a href="#home">Inicio</a></li>
                 <li ><a href="#nosotros">Nosotros</a></li>
                 <li ><a href="#terminales">Terminales</a></li>
                 <li ><a href="#noticias">Noticias</a></li>
                 <li ><a href="horario_tarifas.php">Horarios y Rutas</a></li>
                 <li ><a href="#contact">Contacto</a></li>
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
