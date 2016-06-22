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
    
    $database->delete(
        "tbroute",
    [
        "idRoute" => $_POST["id"]
    ]);
    header("location:admin.php");
}

?>
<html>
    
    <head>
    
    
    	<meta charset="UTF-8">
	<title>Multimedios|Delete</title>
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
       
    
    
  <form action="delete.php" method="post">
     <div id="shade" class="container contactform center">
       
         <h2>Eliminar</h2>
         
         <h2 class="text-center  wowload fadeInUp"><?php echo "¿Quieres eliminar la ruta ".$data[0]["routeName"]."?"; ?></h2>
        <div class="row wowload fadeInLeftBig">      
          <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
               <input type="hidden" name="id" value='<?php echo $data[0]["idRoute"] ?>'>
            <input type="submit" value="SI" >
            <input type="button" value="NO" onclick="history.back();">
            
              
          </div>
        </div>
      </div>
    </form>
    
    
    
    
    
    </body>
</html>