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
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="590" height="215" id="FlashID" title="logo">
    <param name="movie" value="Modulo/Contabilidad/images/logo.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="transparent" />
    <param name="swfversion" value="11.0.0.0" />
    <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0
     r65 o posterior que descarguen la versión más reciente de Flash Player. 
     Elimínela si no desea que los usuarios vean el mensaje. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <param name="menu" value="false" />
    <!-- La siguiente etiqueta object es para navegadores distintos de IE.
     Ocúltela a IE mediante IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="Modulo/Contabilidad/images/logo.swf" width="590" height="215">
      <!--<![endif]-->
      <param name="quality" value="high" />
      <param name="wmode" value="transparent" />
      <param name="swfversion" value="11.0.0.0" />
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <param name="menu" value="false" />
      <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
      <div>
        <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
        <p><a href="http://www.adobe.com/go/getflashplayer">
          <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
      </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
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
