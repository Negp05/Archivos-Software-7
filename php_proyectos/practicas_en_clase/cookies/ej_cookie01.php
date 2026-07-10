<?php
setcookie("usuario","ramon",time() +3600,"/");
echo"<script>alert('Cookie creada exitosamente!');</script>";


/* Leer una cookie */

if(isset($_COOKIE["usuario"])){
    echo"Bienvenido," .htmlspecialchars($_COOKIE["usuario"]);
    echo"<br>";
}else{
    echo"No se encontro la cooke, refresca la pagina!";
    echo"<br>";

}


setcookie("usuario","", time() - 3600,"/");
echo"<script>alert('Cookie eliminada!');</script>";


?>