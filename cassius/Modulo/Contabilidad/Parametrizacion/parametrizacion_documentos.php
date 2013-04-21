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
<link href="../config/estilos_cassius.css" rel="stylesheet" />
<link href="../css/styleagregar_cuentas.css" rel="stylesheet"/>
<link href="../css/titulo.css" rel="stylesheet"/>
<script src="../Scripts/img.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>
<script >
function borrar(id){
	if (confirm('¿Estas seguro que desea borrar este Documento?')){ 
      location.href = "../php/action/deleteDocumento.php?id="+id;
    } 
}function OK(){
	alert('Documento borrada con exito.');
}
function OK2(){
	alert('Documento modificado con exito.');
}
</script>
<?php session_start();
include "../php/dao/daoConnection.php";
include "../php/entities/documentos.php";
include "../php/dao/DocumentoDAO.php";

if(isset($_SESSION['datos'])){
session_unset($_SESSION['datos']);}

if(isset($_SESSION['sigla_d'])){
session_unset($_SESSION['sigla_d']);}

if(isset($_SESSION['nombre_d'])){
session_unset($_SESSION['nombre_d']);}

if(isset($_SESSION['descripcion_d'])){
session_unset($_SESSION['descripcion_d']);}

$DocumentoDAO = new DocumentoDAO();
$documentos = new documentos();
$documento = $DocumentoDAO->getList();

?>
</head>
<body class="interna2" OnContextMenu="return false" <?php if(isset($_GET['OK_de'])){if($_GET['OK_de'] == 1){?>onload="OK()"<?php }} ?> <?php if(isset($_GET['OK_de'])){if($_GET['OK_de'] == 2){?>onload="OK2()"<?php }} ?>>
<?php
    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/parametrizacion_documentos.php');//se llama el la tabla del puc
    }
?>
</body>
</html>
