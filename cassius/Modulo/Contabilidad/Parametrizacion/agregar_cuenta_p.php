<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<title></title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 0;
	top: 0;
}
</style>
<script>
function crear(){
	alert('Nueva Cuenta creada con exito.');
	top.cuenta();
}
</script>
</head>

<body <?php if(isset($_REQUEST['OK']) == 1){ ?>onload="crear()"<?php } ?>>
<div id="apDiv1">
	<iframe src="agregar_cuenta_p2.php?clase=<?php echo $_REQUEST['grupo']; ?>" frameborder="0" id="cu" scrolling="no" width="500px" height="200px">
	</iframe></div>
</body>
</html>