<?php
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<script>
function cerrarVentana(){ 
  window.close(); 
}
<?php if($_REQUEST['OK'] == 2){?>
	opener.datos_tercero(<?php echo $_REQUEST['i']; ?>,<?php echo $_REQUEST['nombre']; ?>);
   window.close();
<?php }?>
</script>
</head>
<body class="popup"   <?php if($_GET['OK'] == 2){?> onload="cerrarVentana();"<?php } ?>   OnContextMenu="return false">
</body>
</html>
