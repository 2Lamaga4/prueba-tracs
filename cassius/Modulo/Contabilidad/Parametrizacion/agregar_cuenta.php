<?php
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" />
<script src="../Scripts/codigo.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<link href="../contabilidad/css/styleagregar_cuentas.css" rel="stylesheet"/>
<script src="../Scripts/img.js"></script>
<script src="../Scripts/agregarCuentas.js"></script>
</head>
<body  class="popup" onUnload="cerrar_v()"> 
<?php 
    include "../php/include_dao.php";

	$CuentaDAO = new CuentaDAO();
	$cuenta = new cuentas();
	$cuentas = $CuentaDAO->getList(1);

	$view= new stdClass(); 
    $view->disableLayout=false;

    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/agregar.php');//se llama el la tabla 
    }
?>
</body>
</html>