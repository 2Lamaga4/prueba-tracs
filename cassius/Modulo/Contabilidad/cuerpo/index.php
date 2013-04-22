<?php
 include_once ('../../info.php');//se llama la informacion de la pagina
?>
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="Scripts/img.js"></script>
<script src="Scripts/globos_ayuda.js"></script>
<script src="Scripts/bloqueo_clic_derecho.js" ></script>
<script src="Scripts/transicion.js"></script>
</head>
<body class="interna2" OnContextMenu="return false">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../menu_home.php'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" alt="Cassius" title="Cassius" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" alt="ModuloAdminitrativo" title="ModuloAdminitrativo" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla">
  <article id="Tizq">
    <img src="images/icono_parametrizacion.jpg" all="Parametrizacion"/>
    <ul>
      <li><input name="cuentas" type="button" class="boton_general" id="cuentas" value="Cuentas" onclick="location.href='Parametrizacion/'"/></li>
      <li><input name="documentos" type="button" class="boton_general" id="documentos" value="Documentos" onclick="location.href='Parametrizacion/parametrizacion_documentos.php'"/></li>
      <li><input name="terceros" type="button" class="boton_general" id="terceros" value="Terceros" onclick="location.href='Parametrizacion/terceros.php'"/></li>
      <li>------------------------------------------------</li>
      <li><input name="contador" type="button" class="boton_general" id="contador" value="Contador" onclick="location.href='Parametrizacion/parametrizacion_contador.php'"/></li>
      <li><input name="administrador" type="button" class="boton_general" id="administrador" value="Administrador - conjunto" onclick="location.href='Parametrizacion/parametrizacion_administrador.php'"/></li>
      <li><input name="revisor_fiscal" type="button" class="boton_general" id="revisor_fiscal" value="Revisor Fiscal" onclick="location.href='Parametrizacion/parametrizacion_fiscal.php'"/></li>
    </ul>
  </article>
  <img src="images/linea_vertical.gif" all="line divisola"/>
  <article id="Tder">
    <img src="images/icono_registro_contable.jpg" all="RegistroContable" />
    <ul>
      <li><input name="registro_documentos" type="button" class="boton_general" id="registro_documentos" value="Registro de documentos" onclick="location.href='registro_documentos.html'"/></li>
      <li><input name="movimientos" type="button" class="boton_general" id="movimientos" value="Movimientos" onclick="location.href='RegistroContable/rc_movimientos.php'"/></li>
      <li>------------------------------------------------</li>
      <li><input name="estados_financieros" type="button" class="boton_general" id="estados_financieros" value="Estados Financieros" onclick="location.href='rc_estados_financieros.html'"/></li>
      <li><input name="caja" type="button" class="boton_general" id="caja" value="Movimiento caja menor" onclick="location.href='rc_caja.html'"/></li>
      <li></li>
    </ul>      
  </article>
</div>
</body>
</html>