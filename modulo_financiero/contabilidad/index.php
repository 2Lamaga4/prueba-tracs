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
<link href="config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="contabilidad/css/style.css" rel="stylesheet" type="text/css" />
<script src="contabilidad/script/script.js" type="text/javascript"></script>
<script src="Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript" src="../Scripts/img.js"></script>
</head>
<body class="interna2" OnContextMenu="return false">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='menu_home.html'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" alt="Cassius" title="Cassius" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" alt="ModuloAdminitrativo" title="ModuloAdminitrativo" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla">
  <article id="Tizq">
    <img src="images/icono_parametrizacion.jpg" all="Parametrizacion"/>
    <ul>
      <li><input name="cuentas" type="button" class="boton_general" id="cuentas" value="Cuentas" onclick="location.href='contabilidad/parametrizacion_cuentas.php'"/></li>
      <li><input name="documentos" type="button" class="boton_general" id="documentos" value="Documentos" onclick="location.href='parametrizacion_documentos.php'"/></li>
      <li><input name="terceros" type="button" class="boton_general" id="terceros" value="Terceros" onclick="location.href='contabilidad/terceros.php'"/></li>
      <li>------------------------------------------------</li>
      <li><input name="contador" type="button" class="boton_general" id="contador" value="Contador" onclick="location.href='parametrizacion_contador.html'"/></li>
      <li><input name="administrador" type="button" class="boton_general" id="administrador" value="Administrador - conjunto" onclick="location.href='parametrizacion_administrador.html'"/></li>
      <li><input name="revisor_fiscal" type="button" class="boton_general" id="revisor_fiscal" value="Revisor Fiscal" onclick="location.href='parametrizacion_fiscal.html'"/></li>
    </ul>
  </article>
  <img src="images/linea_vertical.gif" all="line divisola"/>
  <article id="Tder">
    <img src="images/icono_registro_contable.jpg" all="RegistroContable" />
    <ul>
      <li><input name="balance_inicial" type="button" class="boton_general" id="balance_inicial" value="Balance inicial" onclick="location.href='balance_inicial.html'"/></li>
      <li><input name="registro_documentos" type="button" class="boton_general" id="registro_documentos" value="Registro de documentos" onclick="location.href='registro_documentos.html'"/></li>
      <li><input name="movimientos" type="button" class="boton_general" id="movimientos" value="Movimientos" onclick="location.href='rc_movimientos.php'"/></li>
      <li>------------------------------------------------</li>
      <li><input name="estados_financieros" type="button" class="boton_general" id="estados_financieros" value="Estados Financieros" onclick="location.href='rc_estados_financieros.html'"/></li>
      <li><input name="caja" type="button" class="boton_general" id="caja" value="Movimiento caja menor" onclick="location.href='rc_caja.html'"/></li>
      <li></li>
    </ul>      
  </article>
</div>
</body>
</html>