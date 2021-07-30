<?php


    if(isset($_POST['guardarUsuario'])){
        $apellidoP = $_POST['apellidoP'];
        $apellidoM = $_POST['apellidoM'];
        $nombre    = $_POST['nombre'];
        $sexo      = $_POST['sexo'];
        $fecha_nac = $_POST['fecha_nac'];
        $rfc       = $_POST['rfc'];
        $matricula = $_POST['matricula'];
        $cod_pais  = $_POST['cod_pais'];
        $tel       = $_POST['tel'];
        $email     = $_POST['email'];
        $calle     = $_POST['calle'];
        $num_via   = $_POST['num_via'];
        $interior  = $_POST['interior'];
        $colonia   = $_POST['colonia'];
        $cod_post  = $_POST['cod_post'];
        $nacionalidad     = $_POST['nacionalidad'];

        $con = new mysqli('localhost', 'root', '', 'santander');
        if($con->connect_error){
            die('Connection failed: '.$con->connect_error);
        }else{
            $db = $con->prepare("INSERT INTO registro_santander (apellidoP, apellidoM, nombre, sexo, fecha_nac, rfc, matricula, cod_pais, tel, email, calle, num_via, interior, colonia, cod_post, nacionalidad) 
            VALUES ('$apellidoP', '$apellidoM', '$nombre', '$sexo', '$fecha_nac', '$rfc', '$matricula', '$cod_pais', '$tel', '$email', '$calle',
                    '$num_via', '$interior', '$colonia', '$cod_post', '$nacionalidad')");
            
            $db->execute();
            header("Location: ..\..\gracias.html");
            $db->close();
            $con->close();
        }
    }
?>