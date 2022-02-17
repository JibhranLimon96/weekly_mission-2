    <?php
    //creacion de una funcion para conectar la base de datos
    function ConectarDB(){
  	$servidor = "localhost";
  	$usuario = "root";
  	$clave = "";
  	$bd = "fertilizantes";

    $cnx=mysqli_connect($servidor,$usuario,$clave,$bd);
    return $cnx;

    }
    ?>
