<?php 

require_once "conexion.php";


if(isset($_POST["route"])  && isset($_POST["service"]) ){

    $db = new Conexion();
    
    
    if($db->conectar()){
        
        
       
            
   $queryschedule = mysql_query("SELECT depart FROM
    tbroute where routeName='".$_POST["route"]."'and 
    idService=(SELECT idService from
    tbservices WHERE service='".$_POST["service"]."') ", $db->getConexion());
        
        
    $queryrate = mysql_query("SELECT price FROM
    tbroute where routeName='".$_POST["route"]."'and 
    idService=(SELECT idService from
    tbservices WHERE service='".$_POST["service"]."') ", $db->getConexion());
    
  $querytime = mysql_query("SELECT time FROM
    tbroute where routeName='".$_POST["route"]."'and 
    idService=(SELECT idService from
    tbservices WHERE service='".$_POST["service"]."') ", $db->getConexion());
      
             
        
            session_start();
                     $_SESSION["schedule"]=mysql_result($queryschedule, 0, 0);
                     $_SESSION["rate"]=mysql_result($queryrate,0,0);
                     $_SESSION["time"]=mysql_result($querytime,0,0);
            
          header ("Location: ./horario_tarifas.php");


     

}
}








?>