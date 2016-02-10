<?php

include("negocio/usuario.php");

    //$retorno = $_POST["emailUsuario"];
    $emailUsuario = filter_input(INPUT_POST, 'emailUsuario');
    
    //echo $retorno;
    
    $host="localhost";  //mysql.hostinger.es localhost
    $user="root";  //u755245033_admin root
    $password=""; //admin1234
    $db="concurso_cine"; //u755245033_cine concurso_cine
    $con=mysqli_connect($host,$user,$password,$db);
    
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Se ha producido un error en la BBDD, no es culpa tuya asi que inténtalo de nuevo!";
      }else{
            $nuevoUsuario = new CUsuario();
            
            $nuevoUsuario->setEmail($emailUsuario);
            $nuevoUsuario->graba($con);
            
            //$nuevoUsuario = CUsuario::dameUsuario($con,$emailUsuario);
            
            mysqli_close($con);
        
        echo "ENHORABUENA!!! Tu usuario ha quedado registrado con éxito";
          
      }
 ?>
