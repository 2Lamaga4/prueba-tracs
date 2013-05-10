<?php
 include_once ('../../info.php');//se llama la informacion de la pagina
?>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="Scripts/img.js"></script>
<script src="Scripts/globos_ayuda.js"></script>
<script src="Scripts/bloqueo_clic_derecho.js" ></script>
<script src="Scripts/transicion.js"></script>
</head>
<body class="interna2" OnContextMenu="return false">
<?php

$view= new stdClass(); 
$view->disableLayout=false;

if ($view->disableLayout==false)
{
    include_once ('cuerpo/index.php');
}

?>
</body>
</html>