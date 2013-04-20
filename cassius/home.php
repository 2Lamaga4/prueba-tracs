<?php
 include_once ('info.php');//se llama la informacion de la pagina
?>
<link href="Modulo/Contabilidad/config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script src="Modulo/Contabilidad/Scripts/swfobject_modified.js"></script>
<script src="Modulo/Contabilidad/Scripts/bloqueo_clic_derecho.js"></script>
<script src="Modulo/Contabilidad/Scripts/globos_ayuda.js"></script>
</head>
<body class="home" OnContextMenu="return false">
<div id="logo">
<?php
 include_once ('logoenhtml5/logo.html');//se llama la informacion de la pagina
?>
</div>
<form id="form1" name="form1" method="post" action="">
<div id="logueo">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="16px"></td>
    </tr>
    <tr>
      <td height="35">
		 <dd>
      		<input name="usuario" type="text" class="textarea_redondo" id="usuario" />
            <span class="hint">
              Ingrese su usuario teniendo en cuenta las mayúsculas y minúsculas
              <span class="hint-pointer">&nbsp;</span></span>
      	 </dd>
      </td>
    </tr>
    <tr>
      <td height="35">
      <input name="pass" type="password" class="textarea_redondo" id="pass" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
        <input style="width:90px;"name="Entrar" type="button" class="boton_redondo" id="Entrar" value="::: Entrar :::" onclick="location.href='Modulo/menu_home.php'"/></td>
    </tr>
  </table>
</div>
</form>
<script>
swfobject.registerObject("FlashID");
</script>
</body>
</html>