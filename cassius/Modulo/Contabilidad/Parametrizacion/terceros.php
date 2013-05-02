<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet"  />
<link href="../css/styleterceros.css" rel="stylesheet" />
<link href="../css/terceros.css" rel="stylesheet" />
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.pajinate.js"></script>
<script src="../Scripts/terceros2.js"></script>
<script src="./Scripts/transicion.js" ></script>
</head>
<body class="interna2" OnContextMenu="return false" <?php if(isset($_GET['OK']) == 3){ ?> onload="cerrarVentana()"<?php } ?>>
<?php
    include "../php/dao/terceros.php";//se hace el llamdo a la parte de interaccion con la base de datos
    $TerceroDAO = new TerceroDAO();
    $newTerceros = new Terceros();
    $Terceros = $TerceroDAO->getList();
    $TercerosC = $TerceroDAO->getListC();

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
