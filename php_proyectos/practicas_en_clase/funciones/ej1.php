<title>Parametros en pHP</title>
</head>
<body>

<?php
function drink( string $tmp = 'caliente' , string $bebida ='te')
{
    echo "Tomando $bebida $tmp.<br>";
}

drink();
drink('frio');
drink('frio','limonada')

?>
</body>