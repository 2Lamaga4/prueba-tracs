<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="css/styleterceros.css" rel="stylesheet" type="text/css"/>
<link href="" rel="stylesheet" type="text/css"/>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.quick.pagination.min.js"></script>
<script type="text/javascript" src="../Scripts/img.js"></script>
<script src="../Scripts/terceros.js"></script>
</head>
<body class="interna2" OnContextMenu="return false" <?php if(isset($_GET['OK']) == 3){ ?> onload="cerrarVentana()"<?php } ?>>
<?php
    include "php/terceros.php";//se hace el llamdo a la parte de interaccion con la base de datos
    $TerceroDAO = new TerceroDAO();
    $newTerceros = new Terceros();
    $Terceros = $TerceroDAO->getList();

    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/terceros.php');//se llama el cuerpo de terceros
    }
?>
</body>
</html>
