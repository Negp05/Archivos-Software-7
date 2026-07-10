<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ciclos anidados</title>
</head>
<body>

<dl>
<?php
for ($i = 1; $i <= 4; $i++) {
    echo "<dt>Iteración ciclo externo $i</dt>";
    
    for ($j = 1; $j <= 4; $j++) {
        echo "<dd>Iteración ciclo interno $j</dd>";
    }
}
?>
</dl>

</body>
</html>