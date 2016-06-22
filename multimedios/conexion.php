<?php
require_once "config.php";

class conexion
{
    protected $conexion;
    protected $db;
 
    public function conectar()
    {
        $this->conexion = mysql_connect(HOST, USER, PASS);
        if ($this->conexion == 0) DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysql_error());
        $this->db = mysql_select_db(DBNAME, $this->conexion);
        if ($this->db == 0) DIE("Lo sentimos, no se ha podido conectar con la base datos: " . DBNAME);
 
        return true;
 
    }
 
    public function desconectar()
    {
        if ($this->conectar->conexion) {
            mysql_close($this->$conexion);
        }
 
    }

     public function cerrarConexion() {
        $this->conexion->close();
    }
    public function getConexion() {
        return $this->conexion;
    }
    
    
    
    
     public function pruebadb()
    {
        $tabla = "<strong>TU_TABLA</strong>";
        $query = mysql_query("SELECT count(*) from tbUsuarios", $this->conexion);
        if ($query == 0) echo "Sentencia incorrecta llamado a tabla: tbUsuarios.";
        else {
            $nregistrostotal = mysql_result($query, 0, 0);
            echo "Hay $nregistrostotal registros en la tabla: $tabla.";
            mysql_free_result($query);
        }
    }
}
    
    
   ?>