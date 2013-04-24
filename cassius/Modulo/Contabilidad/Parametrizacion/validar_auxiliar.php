<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
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
</head>

<body>
<div id="apDiv1">
	<iframe src="validar_auxiliar2.php?aux=<?php echo $_REQUEST['aux']; ?>&clase=<?php echo $_REQUEST['clase']; ?>&nivel=<?php echo $_REQUEST['nivel']; ?>" frameborder="0" id="gr" scrolling="no" width="10px" height="10px">
	</iframe>
</div>
</body>
</html>