<?php
// $nombre = $_POST["nombre"];
$nombre = "<script>Ana</script> ";
//$nombre = strip_tags($nombre); // quita HTML
$nombre = trim($nombre);// quita espacios
$nombre = htmlspecialchars($nombre);
echo $nombre;// dato limpio