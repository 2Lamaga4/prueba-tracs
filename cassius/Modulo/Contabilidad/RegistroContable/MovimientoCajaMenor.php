<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>

<link href="../config/estilos_cassius.css" rel="stylesheet"/>
<link href="../css/titulo.css" rel="stylesheet"/>
<link href="../css/styleMovimientoCajaMenor.css" rel="stylesheet"/>
<link href="../css/Movimientocaja.php" rel="stylesheet"/>
<script src="../Scripts/MovimientoCajaMenor.js"></script>
<script src="../Scripts/globos_ayuda.js"></script>
<script src="../Scripts/bloqueo_clic_derecho.js"></script>
<script src="../Scripts/transicion.js"></script>
</head>
<body class="interna2" onload="MM_preloadImages('images/btn_flecha_atras_roll.png','images/btn_flecha_adelante_roll.png')" OnContextMenu="return false">
<?php 

    $view= new stdClass(); 
    $view->disableLayout=false;

    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/movimientophp.php');	
      include_once ('cuerpo/MovimientoCajaMenor.php');
    }
?>
</body>
</html>
