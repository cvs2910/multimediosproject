<?php


session_start();
if(isset($_SESSION["username"])){
    
    
include_once "conexion.php";

$db = new conexion();
$pages = 'admin';
if($db->conectar()){
    
$queryService = mysql_query("SELECT idService,service from tbServices", $db->getConexion());    
    
    

    
}else{
    
            echo "<center><p>Datos de formulario incorrectos</p></center>";
    
}


}else{
        header("Location: index.php");

    
}
//La seccion anterior es para comprobar que hay una session activa



require 'medoo.php';
 
require 'medoo_config.php';


if($_POST){
    
    $database->insert("tbroute", [
        "routeName" => $_POST["route"],
        "price" => $_POST["price"],
        "time" => $_POST["time"],
        "depart" => $_POST["schedule"],
        "idService" => $_POST["service"],
    ]);
     header("location:admin.php");
}

$services = $database->select("tbservices", "*");

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Multimedios|Admin</title>
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
        
        
        
        
        <?php include 'menu.php';?>

        
    <div id="insert-content">

   <form action="insert.php" method="post">

     <div id="shade" class="container contactform center">
        <h2 class="text-center  wowload fadeInUp">Sistema de registro</h2>
          <div class="row wowload fadeInLeftBig">      
              <div class="col-sm-6 col-sm-offset-3 col-xs-12">  
                  <select name="service" id="select">

                                <?php

                                    $len = count($services);
                                    for($i=0; $i<$len; $i++){
                                        echo "<option value=".$services[$i]["idService"].">".$services[$i]["service"]."</option>";
                                    }
                                ?>

                   </select>
                <input type="text" placeholder="Route" name="route">
                <input type="text" placeholder="Price" name="price">
                <input type="text" placeholder="Time" name="time">
                <textarea rows="5" placeholder="Escribe los horarios aqui" name="schedule"></textarea>
                <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Registar</button>
              </div>
          </div>



        </div>

   </form>



</div>




    </body>
</html>
