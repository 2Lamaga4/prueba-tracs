<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet"/>
<link href="../css/stylesgregar_tercero.css" rel="stylesheet"/>
<link href="../css/stylemovimiento.css" rel="stylesheet"/>
<script src="../jslib/mootools-1.2-core-compressed.js"></script>
<script src="../jslib/vlaCal-v2.1-compressed.js"></script>
<script src="../Scripts/movimiento.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>
<script src="../Scripts/img.js"></script>
<script src="../Scripts/scrtiprcmovimientos.js"></script>  
<script src="../Scripts/buscarfecha.js"></script>  
<script type="text/javascript" src="../Scripts/buscarfecha.js"></script>
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
  