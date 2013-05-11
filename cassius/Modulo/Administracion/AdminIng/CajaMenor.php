<?php

  include_once ('../../../info.php');//se llama la informacion de la pagina


?>
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="../css/StyleCajaMejor.css" rel="stylesheet" type="text/css" />
<link href="../css/titulo.css" rel="stylesheet" type="text/css" />
<script src='../../Contabilidad/js/jquery.autocomplete.js'></script>
<script src="../script/img.js"></script>
<script src="../script/globos_ayuda.js"></script>
<script src="../script/bloqueo_clic_derecho.js" ></script>
<script src="../script/tercero.js"></script>
<!--<script src="../script/transicion.js"></script> -->
<script>
  function ok(){
           alert('Agregado con exito');
  }
</script>

</head>
<body class="interna2" OnContextMenu="return false" <?php if(isset($_GET['OK'])==1){ echo 'Onload="ok();"';}?>>
<?php
 
  include_once('../php/dao/CuentaDAO.php');
  include_once('../php/entities/cuentas.php');
  include_once('../php/dao/MovimientosDAO.php');
  include_once('../php/dao/terceros.php');
  include_once('../php/entities/terceros.php');
  $MovimientosDAO = new MovimientosDAO(); 
  $cuentasDAO = new CuentaDAO();
  $cuentas = new cuentas();
  $TercerosDAO = new TerceroDAO();
  $terceros = new terceros(); 
  $terceros = $TercerosDAO->getListC();
  $sal=$MovimientosDAO->saldo();
  $cuentas=$cuentasDAO->getList(5);
$view= new stdClass(); 
$view->disableLayout=false;

if ($view->disableLayout==false)
{
    include_once ('cuerpo/CajaMenor.php');
}

?>
</body>
</html>