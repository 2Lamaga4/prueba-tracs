<?php
include "cuerpo/agregar_comprobante_diario.php";
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" />
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/codigo.js"></script>
<script src="../js/jquery.js"></script>
<script src='../js/jquery.bgiframe.min.js'></script>
<script src='../js/jquery.autocomplete.js'></script>
<link rel="stylesheet" href="../js/jquery.autocomplete.css" />
<link rel="stylesheet" href="../css/datepicker.css" />
<script src="../js/datepicker.js"></script>
<script src="../js/eye.js"></script>
<script src="../js/utils.js"></script>
<script src="../js/layout.js?ver=1.0.2"></script>
<script src="../Scripts/img.js"></script>
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
