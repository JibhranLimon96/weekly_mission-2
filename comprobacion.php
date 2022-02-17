   <?php
   //verficamos la conexion
   require("conexion.php");

   $conex=ConectarDB();

   if($conex){
		  echo "conexion existosa:)";
     	   }
        else {
  	 echo ":(";
     }

   ?>