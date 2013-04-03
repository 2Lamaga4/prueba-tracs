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
<script src="script/scriptcuentas.js" type="text/javascript"></script>
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="css/stylecuenta.css" rel="stylesheet" type="text/css" />
<script src="../Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="../Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="../Scripts/transicion.js" type="text/javascript"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js' type='text/javascript'/></script>
</head>
<body class="interna2" onload="MM_preloadImages('../images/btn_menos_roll.jpg','../images/btn_mas_roll.jpg')" OnContextMenu="return false">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../contabilidad_home.php'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro"  id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <div class="titulos" id="subtitulo">&gt; Parametrización Cuentas</div>
    <section id="butAg">
      <input name="agregar" type="button" class="boton_agregar"  value="Agregar" onclick="MM_openBrWindow('../agregar_cuenta.php','AgregarCuenta','width=560px,height=550px,scrollbars=yes')"/>
    </section>
  </div>
</div> 
<div id="contenido_tabla2"> 
  <?php
    include "../php/include_dao.php";

    $CuentaDAO = new CuentaDAO();
    $cuenta = new cuentas();
    $cuentas = $CuentaDAO->getList(1);

    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/cuenta.php');//se llama el la tabla del puc
    }
?>
  </div>
</body>
</html>

