<?php

session_start();
if(isset($_SESSION["username"])){
    
    
include_once "conexion.php";
$pages = 'admin';



}else{
        header("Location: index.php");

    
}

require 'medoo.php';
 
require 'medoo_config.php';



if($_GET){
    $data = $database->select(
        "tbroute", 
        "*",
        [
            "idRoute" => $_GET["id"]
        ]);
}

if($_POST){
    
    $database->update(
        "tbroute", 
        [
            "price" => $_POST["price"],
            "time" => $_POST["time"],
            "depart" => $_POST["schedule"]
        ],[
            "idRoute" => $_POST["id"]
        ]);
        header("location:admin.php");
}

?>
<html>
	
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
        
    <div id="shade" class="container contactform center">

        <form action="update.php" method="post"> 
           

            
            
       <h2><?php echo "¿Quieres editar la ruta ".$data[0]["routeName"]."?"; ?></h2>
            
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">      

         <input type="text" placeholder="Precio" name="price" value='<?php echo $data[0]["price"] ?>'>
        
         <input type="text" placeholder="Tiempo" name="time" value='<?php echo $data[0]["time"] ?>'>
         <input type="text" placeholder="Horario" name="schedule" value='<?php echo $data[0]["depart"] ?>'>
         <input type="hidden" name="id" value='<?php echo $data[0]["idRoute"] ?>'> 
           
         <input type="submit" value="EDITAR">
         <input type="button" value="CANCELAR" onclick="history.back();">
            </div>
        </form>
        
        </div>

        
        
        
        
        
    </body>
</html>
