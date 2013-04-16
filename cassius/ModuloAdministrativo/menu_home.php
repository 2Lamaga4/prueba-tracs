<?php
 include_once ('../info.php');//se llama la informacion de la pagina
?>
<link href="Contabilidad/config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script src="Contabilidad/Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Contabilidad/Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Contabilidad/Scripts/transicion.js" type="text/javascript"></script>
</head>
<body class="interna" OnContextMenu="return false">
<div id="logo_small2"><img src="Contabilidad/images/logo_small.png" width="567" height="164" /></div>
<div id="items">
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="289" height="135">&nbsp;</td>
      <td width="166">&nbsp;</td>
      <td width="295">&nbsp;</td>
    </tr>
    <tr>
      <td height="40" align="center" valign="middle">
<!-- Modulo de registro -->
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="40" align="center">
  <!--vivienda-->       
            <input name="vivienda" type="button" class="boton_viviendas" id="vivienda" value="Viviendas" onclick="location.href='viviendas.html'"/></td>
        </tr>
        <tr>            
          <td height="40" align="center">
  <!--residentes-->             
            <input name="residente" type="button" class="boton_residentes" id="residente" value="Ver residentes" onclick="location.href='residentes.html'"/></td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
      <td align="center" valign="middle">
<!-- Modulo de Visitantes -->        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>           
          <td height="40" align="center">
  <!--entrada_visitantes.html-->             
            <input name="entrada" type="button" class="boton_entrada" id="entrada" value="Visitantes" onclick="location.href='entrada_visitantes.html'"/></td>
        </tr>
        <tr>
          <td height="40" align="center">
  <!--historial_visitantes.html-->             
            <input name="historia" type="button" class="boton_histo" id="historia" value="Historial" onclick="location.href='historial_visitantes.html'"/></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="165" align="center" valign="middle">&nbsp;</td>
      <td>&nbsp;</td>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td height="40" colspan="3" align="center" valign="middle">
<!-- Modulo de Administrativo -->             
        <table width="250" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="40" align="center">
  <!--contabilidad-->            
            <input name="contabilidad" type="button" class="boton_contabilidad" id="contabilidad" value="Contabilidad" onclick="location.href='Contabilidad/contabilidad_home.php'"/></td>
        </tr>
        <tr>
          <td height="40" align="center">
  <!--administracion-->                         
            <input name="admin" type="button" class="boton_administrador" id="admin" value="Administración" onclick="location.href='administracion_home.html'"/></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<div id="salir">
  <table width="250" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="131">
        <input name="configuracion" type="button" class="boton_config" id="configuracion" value="  Configuración" onclick="location.href='configuracion_home.php'"/></td>
      <td width="99">
        <input name="salir_home" type="button" class="boton_salir" id="salir_home" value="Salir" onclick="location.href='../home.php'"/></td>
    </tr>
  </table>
</div>
</body>
</html>
