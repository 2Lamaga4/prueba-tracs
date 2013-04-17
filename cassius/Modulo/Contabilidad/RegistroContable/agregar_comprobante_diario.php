<?php
include "cuerpo/agregar_comprobante_diario.php";
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script src="../Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script type="text/javascript" src="../Scripts/codigo.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type='text/javascript' src='../js/jquery.bgiframe.min.js'></script>
<script type='text/javascript' src='../js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="../js/jquery.autocomplete.css" />
<link rel="stylesheet" href="../css/datepicker.css" type="text/css" />
<script type="text/javascript" src="../js/datepicker.js"></script>
<script type="text/javascript" src="../js/eye.js"></script>
<script type="text/javascript" src="../js/utils.js"></script>
<script type="text/javascript" src="../js/layout.js?ver=1.0.2"></script>
<script type="text/javascript" src="../Scripts/img.js"></script>
<?php
   include('cuerpo/agregar_comprobante_diariojs.php');
 ?>  
</head>

<body class="popup" onload="dato_tercero2(); <?php if($_GET['OK'] == 1){?>cerrarVentana()<?php } ?>"  onUnload="cerrar_v()" >

<?php
    $view= new stdClass(); 
    $view->disableLayout=false;
if ($view->disableLayout==false)
    {
      include_once ('movimientos/agregar_componentes_diario.php');
    }
 ?>   
</body>
</html>
