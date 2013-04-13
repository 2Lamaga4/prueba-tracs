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
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Scripts/img.js"></script>
<link href="css/stylesgregar_tercero.css" rel="stylesheet" type="text/css"/>
<script src="../Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="../Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="../Scripts/transicion.js" type="text/javascript"></script>
</head>
<body class="interna2" OnContextMenu="return false">
<?php

    include "../php/dao/daoConnection.php";
    include "../php/entities/funcionarios.php";
    include "../php/dao/FuncionariosDAO.php";

    $FuncionariosDAO = new FuncionariosDAO();
    $funcionarios = new funcionarios();
    $funcionario = $FuncionariosDAO->get(2);

    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/parametrizacion_contador.php');//se llama el cuerpo de parametrizacion_contador
    }
?>
</body>
</html>
