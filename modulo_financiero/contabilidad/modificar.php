<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
<meta name="description" content="software de propiedad horizontal">
<meta property="og:title" content="Cassius" />
<meta property="og:type" content="software" />
<meta property="og:url" content=""/>
<meta property="og:image" content="" />
<meta property="og:site_name" content="Cassius" />
<title>Cassius - software de propiedad horizontal</title>
<link href="../config/estilos_cassius.css" rel="stylesheet"/>
<script type="text/javascript" src="../Scripts/codigo.js"></script> 
<script type="text/javascript" src="../scriptagregar_cuentas.js"></script>
<link href="css/styleagregar_cuentas.css" rel="stylesheet"/>
<script src="../Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="../Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="../Scripts/globos_ayuda.js" type="text/javascript"></script>
</head>
<body  class="popup" OnContextMenu="return false" onUnload="cerrar_v()">  

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