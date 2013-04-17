<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="screen" href="../styles/vlaCal-v2.1.css" type="text/css" />
<link rel="stylesheet" media="screen" href="../styles/vlaCal-v2.1-adobe_cs3.css" type="text/css" />
<link rel="stylesheet" media="screen" href="../styles/vlaCal-v2.1-apple_widget.css" type="text/css" />
<link href="../contabilidad/css/stylemovimiento.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../jslib/mootools-1.2-core-compressed.js"></script>
<script type="text/javascript" src="../jslib/vlaCal-v2.1-compressed.js"></script>
<script src="../Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="../Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="../Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript" src="../Scripts/img.js"></script>
<script type="text/javascript" src="../Scripts/scrtiprcmovimientos.js"></script>  
</head>
<body class="interna2" OnContextMenu="return false">
 <?php
    $view= new stdClass(); 
    $view->disableLayout=false;

    if ($view->disableLayout==false)
    {
      
      include_once ('cuerpo/movimientophp.php');
      include_once ('cuerpo/movimiento.php');
    }
?>
</body>
</html>
