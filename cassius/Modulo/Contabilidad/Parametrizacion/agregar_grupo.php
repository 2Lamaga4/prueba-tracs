<?php
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" />
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
	alert('Nueva Grupo creado con exito.');
	top.grupo();
}
</script>
</head>

<body <?php if(isset($_REQUEST['OK']) == 1){ ?>onload="crear()"<?php } ?>>
<div id="apDiv1">
	<iframe src="agregar_grupo2.php?clase=<?php echo $_REQUEST['clase']; ?>" frameborder="0" id="gr" scrolling="no" width="500px" height="200px"></iframe></div>
</body>
</html>