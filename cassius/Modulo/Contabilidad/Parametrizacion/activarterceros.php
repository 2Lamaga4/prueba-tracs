<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="../css/styleterceros.css" rel="stylesheet" type="text/css"/>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>
<script src="../js/jquery-1.7.1.min.js"></script>
<script src="../js/jquery.quick.pagination.min.js"></script>
<script src="../Scripts/img.js"></script>
<script src="../Scripts/terceros.js"></script>
</head>
<body class="interna2" OnContextMenu="return false" <?php if(isset($_GET['OK']) == 3){ ?> onload="cerrarVentana()"<?php } ?>>
<?php
    include "../php/dao/terceros.php";//se hace el llamdo a la parte de interaccion con la base de datos
    $TerceroDAO = new TerceroDAO();
    $newTerceros = new Terceros();
    $Terceros = $TerceroDAO->getList2();

    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/activarterceros.php');//se llama el cuerpo de terceros
    }
?>
</body>
</html>