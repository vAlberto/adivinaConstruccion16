<?php

include("negocio/usuario.php");

    //$retorno = $_POST["emailUsuario"];
    $emailUsuario = filter_input(INPUT_POST, 'emailUsuario');
    
    //echo $retorno;
    
    $host="mysql.hostinger.es";  //mysql.hostinger.es localhost
    $user="u757224095_admin";  //u755245033_admin root
    $password="admin1234"; //admin1234
    $db="u757224095_cine"; //u757224095_cine concurso_cine
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
