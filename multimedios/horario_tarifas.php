<?php 

$pages = 'horarios_tarifas'; 
session_start();

include_once "conexion.php";

$db = new conexion();

if($db->conectar()){
    
$queryRoute = mysql_query("SELECT idRoute,routeName from tbroute", $db->getConexion());    
$queryService = mysql_query("SELECT idService,service from tbservices", $db->getConexion());    
    
    

    
}else{
    
            echo "<center><p>Datos de formulario incorrectos</p></center>";
    
}




?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Multimedios|Project</title>
  <!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="./assets/animate/animate.css" />
<link rel="stylesheet" href="./assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="./assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
<link rel="icon" href="./images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="./assets/style.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
	
</head>
<body>
    <?php include_once("analyticstracking.php") ?>
<?php include 'menu.php';?>

<div id="schedule-content">
    <div id="horarios">
        
        
        
	<form action="query_schedule.php" method="post">
	
        <div id="routes-info">
	<div id="rutas">
	<b>Servicios: </b>
       <select name="service" id="servicios" onchange="changeRoutes()">
       <option value="Seleccione un servicio">Seleccione un servicio</option>
     <?   
    
    while($fila=mysql_fetch_row($queryService)){
        
        echo "<option value='".$fila['1']."'>".$fila['1']."</option>";
        
        
    }
    
    
    ?>
    </select>
    
    <b>Rutas: </b>
       <select name="route" id="start" >
          <option value="Seleccione una ruta">Seleccione una ruta</option>
         <?   
    
    while($fila=mysql_fetch_row($queryRoute)){
        
        echo "<option value='".$fila['1']."'>".$fila['1']."</option>";
        
        
    }
    
    
    ?>
          
        </select>        
        <p id="alerta">* Seleccione un servicio para habilitar las rutas.</p>	
        </div>

         <button id="btn_consulta" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Consultar</button>
    
    </form>

    
    
    <div id="schedule">
        <div class="titulo-h2"><b>Salidas</b></div>
        <textarea readonly name="schedule" id="textareaS">
        
            <?php 


                if(isset($_SESSION["schedule"]) ){
                echo $_SESSION["schedule"];
                $_SESSION["schedule"]=array();
                }
            ?>
        </textarea>
    </div>
        
  
    

    <div id="rate">
        <div class="titulo-h2"><b>Tarifa</b></div>
        <textarea readonly name="rate">
    
         <?php 

            if(isset($_SESSION["rate"]) ){    
                echo $_SESSION["rate"];
                $_SESSION["rate"]=array();
            }
          ?>
            
            
        </textarea>
    </div>
      <div id="time">
        <div class="titulo-h2"><b>Duracion</b></div>
       <textarea readonly name="time" >
    
         <?php 
                  
            if(isset($_SESSION["time"]) ){    
                echo $_SESSION["time"];
                $_SESSION["time"]=array();
              
    
                
            }
          ?>
        </textarea>   
        </div>

        <div id="map"></div>    
    </div>
    
    </div>
</div>
   
    <script>
        
        function changeRoutes(){
            
    document.getElementById("start").options[1].hidden= true;
    document.getElementById("start").options[2].hidden= true;
    document.getElementById("start").options[3].hidden= true;
     document.getElementById("start").options[4].hidden= true; 
            
    if(document.getElementById("servicios").value == 'Directo'){
    document.getElementById("start").options[1].hidden= false;
    document.getElementById("start").options[2].hidden= false;
    document.getElementById("start").options[3].hidden= false;
     document.getElementById("start").options[4].hidden= true;    
    }
    else{
    document.getElementById("start").options[1].hidden= true;
    document.getElementById("start").options[2].hidden= true;
    document.getElementById("start").options[3].hidden= true; 
     document.getElementById("start").options[4].hidden= false; 
       
    }
}

function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: {lat: 9.98, lng: -83.82}
  });
  directionsDisplay.setMap(map);

  var onChangeHandler = function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
    
 document.getElementById('start').addEventListener('change', onChangeHandler);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    var combo = document.getElementById("start").value;
    var comboS = document.getElementById("servicios").value;
    var origen;
    var destino;
    
     var waypts=[];
   
    if(comboS == 'Indirecto'){
        if(combo == 'SanJose-Puntarenas'){
            this.origen='Empresarios Unidos, San José, Costa Rica';
            this.destino='Terminal de buses de Puntarenas - San José, Costa Rica';
            
            waypts.push({
                location: 'Central de Autobuses del Norte, Alajuela, Costa Rica',
                stopover: true
      
            });
        
            waypts.push({
                location: 'Empresarios Unidos, San Ramon, Costa Rica',
                stopover: true
            });
           
            waypts.push({
                location: 'Estacion de Buses de Empresarios Unidos, Costa Rica',
                stopover: true
            });
            
            
            waypts.push({
                location: 'Terminal Puntarenas - San José Sector El Roble, El Roble, Puntarenas, Costa Rica',
                stopover: true
            });
        
        
        }
        
         if(combo == 'Puntarenas-SanJose'){
            this.origen='Terminal de buses de Puntarenas - San José, Costa Rica';
            this.destino='Empresarios Unidos, San José, Costa Rica';
           
            waypts.push({
                location: 'Terminal Puntarenas - San José Sector El Roble, El Roble, Puntarenas, Costa Rica',
                stopover: true
            });
            waypts.push({
                location: 'Estacion de Buses de Empresarios Unidos, Costa Rica',
                stopover: true
            }); 
             
            waypts.push({
                location: 'Empresarios Unidos, San Ramon, Costa Rica',
                stopover: true
            });
             
            waypts.push({
                location: 'Central de Autobuses del Norte, Alajuela, Costa Rica',
                stopover: true
      
            });
             
             
        
        }
        
         if(combo == 'SanJose-Alajuela-SanRamon'){
            this.origen='Empresarios Unidos, San José, Costa Rica';
            this.destino='Empresarios Unidos, San Ramon, Costa Rica'
            waypts.push({
                location: 'Central de Autobuses del Norte, Alajuela, Costa Rica',
                stopover: true
            });
         }
        
         if(combo == 'SanRamon-Alajuela-SanJose'){
            this.origen='Empresarios Unidos, San Ramon, Costa Rica';
            this.destino='Empresarios Unidos, San José, Costa Rica'
            waypts.push({
                location: 'Central de Autobuses del Norte, Alajuela, Costa Rica',
                stopover: true
            });
         }
        
         if(combo == 'SanRamon-Esparza-Puntarenas'){
            this.origen='Empresarios Unidos, San Ramon, Costa Rica';
            this.destino='Terminal de buses de Puntarenas - San José, Costa Rica';
             
             
            waypts.push({
                location: 'Estacion de Buses de Empresarios Unidos, Costa Rica',
                stopover: true
            });
            waypts.push({
                location: 'Terminal Puntarenas - San José Sector El Roble, El Roble, Puntarenas, Costa Rica',
                stopover: true
            });
             
             
        }
        if(combo == 'Puntarenas-Esparza-SanRamon'){
            this.origen='Terminal de buses de Puntarenas - San José, Costa Rica';
            this.destino='Empresarios Unidos, San Ramon, Costa Rica';
             
             
            waypts.push({
                location: 'Terminal Puntarenas - San José Sector El Roble, El Roble, Puntarenas, Costa Rica',
                stopover: true
            });
            waypts.push({
                location: 'Estacion de Buses de Empresarios Unidos, Costa Rica',
                stopover: true
            });
             
             
    }
    
    }
        
     if(comboS == 'Directo'){
         
      
            if(combo == 'SanJose-Puntarenas'){
            this.origen='Empresarios Unidos, San José, Costa Rica';
            this.destino='Terminal de buses de Puntarenas - San José, Costa Rica';       
        
        }
         
         
         if(combo == 'Puntarenas-SanJose'){
            this.origen='Terminal de buses de Puntarenas - San José, Costa Rica';
            this.destino='Empresarios Unidos, San José, Costa Rica'
        }
         
           if(combo == 'SanJose-Alajuela-SanRamon'){
            this.origen='Empresarios Unidos, San José, Costa Rica';
            this.destino='Empresarios Unidos, San Ramon, Costa Rica';
            waypts.push({
                location: 'Central de Autobuses del Norte, Alajuela, Costa Rica',
                stopover: true
            });
         }
         
           if(combo == 'SanRamon-Alajuela-SanJose'){
            this.origen='Empresarios Unidos, San Ramon, Costa Rica';
            this.destino='Empresarios Unidos, San José, Costa Rica';
            waypts.push({
                location: 'Central de Autobuses del Norte, Alajuela, Costa Rica',
                stopover: true
            });
         }
         
           if(combo == 'Esparza-SanJose'){
            this.origen='Estacion de Buses de Empresarios Unidos, Costa Rica';
            this.destino='Empresarios Unidos, San José, Costa Rica';
             
        }   
    
    }
    
   
   
   
    
    directionsService.route({
        
    origin: this.origen,
    destination: this.destino,
    waypoints: waypts,
    optimizeWaypoints: true,
    travelMode: google.maps.TravelMode.DRIVING,
    transitOptions: {
     modes: [google.maps.TransitMode.BUS]
     },
  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
  
     
    document.getElementById("alerta").hidden = false;
            } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}
        
        </script>

       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2XFBKarf4UHjFSKSuBwKp6ewBlVCQMlg&signed_in=true&callback=initMap"
        async defer>
    </script>


<?php include 'footer.php';?>

<script src="assets/script.js"></script>





    <?php 
     session_destroy();
     ?>

</body>
</html>