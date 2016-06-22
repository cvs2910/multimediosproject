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
<body >
<?php include 'menu.php';?>
    
    
      

<div id="admin-content">
    
    
    <?php include 'list.php';?>

    
    
    </div>
    
    
    
    








</body>
</html>