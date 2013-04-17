<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<script src="../Scripts/scriptcuentas.js" type="text/javascript"></script>
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="../css/stylecuenta.css" rel="stylesheet" type="text/css" />
<script src="../Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="../Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="../Scripts/transicion.js" type="text/javascript"></script>
<script type="text/javascript" src="../Scripts/img.js"></script>
<script src='../Scripts/jquery.js' type='text/javascript'/></script>
</head>
<body class="interna2" onload="MM_preloadImages('../images/btn_menos_roll.jpg','../images/btn_mas_roll.jpg')" OnContextMenu="return false">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro"  id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <div class="titulos" id="subtitulo">&gt; Parametrización Cuentas</div>
    <section id="butAg">
      <input name="agregar" type="button" class="boton_agregar"  value="Agregar" onclick="MM_openBrWindow('agregar_cuenta.php','AgregarCuenta','width=560px,height=550px,scrollbars=yes')"/>
    </section>
  </div>
</div> 
<div id="contenido_tabla2"> 
  <?php
    include "../php/dao/daoConnection.php";
    include "../php/entities/cuentas.php";
    include "../php/dao/CuentaDAO.php";

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

