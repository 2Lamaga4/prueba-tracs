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
<link href="css/styleterceros.css" rel="stylesheet" type="text/css"/>
<link href="" rel="stylesheet" type="text/css"/>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.quick.pagination.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $("ul.pagination1").quickPagination();
  $("ul.pagination2").quickPagination({pagerLocation:"both"});
  $("ul.pagination3").quickPagination({pagerLocation:"both",pageSize:"3"});
});
function borrar(id){
  if (confirm('¿Estas seguro que desea borrar este Tercero?')){ 
     // location.href = "../php/action/deleteTerceros.php?id="+id;
    } 
}
</script>
</head>
<body class="interna2" OnContextMenu="return false" >
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
