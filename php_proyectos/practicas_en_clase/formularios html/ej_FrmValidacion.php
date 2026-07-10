<?php
$email = "ana@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo"Email valido";
}else{
    echo"Email no valido";
}
echo"<br>";
$nombre = "<script>Ana</script>";
$limpio = filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);
echo $limpio;