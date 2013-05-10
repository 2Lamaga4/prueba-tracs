<?php
 include_once ('../../info.php');//se llama la informacion de la pagina
?>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Scripts/img.js"></script>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
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