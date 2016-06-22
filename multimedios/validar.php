<?php 


if(isset($_POST["email"])  && isset($_POST["password"]) ){
    
    include_once "conexion.php";
    
    $db= new conexion();
    
    if($db->conectar()){
        
    $query = mysql_query("SELECT * from tbLogin where email='".$_POST["email"]."' and password='".$_POST["password"]."'", $db->getConexion());
    
        if(mysql_num_rows($query)>0){
            
            session_start();
            
            $_SESSION["username"]=$_POST["email"];
            
            ?>

              <script>

               window.location="admin.php";


              </script>


            <?php
            
            
            
            
        }//fin del if dentro del otro if XD
        else{
            
            
            echo "<center><p>Datos de formulario incorrectos</p></center>";
            
            
        }
        
        
        
    }//fin del if

    
    
}





?>