<?php
//echo "Entramos a la conexion mysql";
    class Conexion extends mysqli {
        public function __construct(){
            parent::__construct('localhost','root','','santander');
            //$this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error con la conexion') : $x = 'Conectado';
            //echo $x;
            unset($x);
        }
       // $db = new Conexion();
        public function recorrer($y){
            return mysqli_fetch_array($y);
        }
        public function rows($y){
            return mysqli_num_rows($y);
        }
    }
?>