<?php
require 'medoo.php';
require 'medoo_config.php';
 

 
//$data = $database->select("tb_personal", "*");

/*
select 
    tb_personal.id_personal, tb_personal.nombre, tb_personal.apellido, tb_personal.id_depto, tb_deptos.id_depto, tb_deptos.depto
from 
    tb_personal inner join tb_deptos
on 
    tb_personal.id_depto = tb_deptos.id_depto
*/
$data = $database->select("tbroute",[ "[><]tbservices" => ["idService" => "idService"]],[
            "tbroute.idRoute",
            "tbroute.routeName",
            "tbroute.price",
            "tbroute.time",
            "tbroute.depart",
            "tbservices.idService",
            "tbservices.service"
        ]);
?>
<html>
    <head></head>
    <body>
        <table >
            
           <tr><th>Ruta</th><th>Precio</th><th>Tiempo</th><th>Horario</th><th>Servicio</th><th>Opciones</th></tr>
         
            <?php
                $len = count($data);
                for($i=0; $i<$len; $i++){
                    echo  "<tr>
                    <td>".$data[$i]["routeName"]."</td>
                    <td>".$data[$i]["price"]."</td>
                    <td>".$data[$i]["time"]."</td>
                    <td>".$data[$i]["depart"]."</td>
                    <td>".$data[$i]["service"]."</td>
                    <td>
                    <a href='update.php?id=".$data[$i]["idRoute"]."'><img src='img/edit.png' id='a-img-edit'></a> 
                    <a  href='delete.php?id=".$data[$i]["idRoute"]."'><img src='img/delete.png' id='a-img-delete'></a>
                    </td>
                    </tr>";
                }
            ?>
        </table>
        <br>
    </body>
</html>