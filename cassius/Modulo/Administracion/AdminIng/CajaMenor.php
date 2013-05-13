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
<?php
   include('../../Contabilidad/RegistroContable/cuerpo/agregar_comprobante_diariojs.php');
 ?>  
<script src="../../Contabilidad/Scripts/agregarcomprobamte.js"></script>
<script>
  function ok(){
           alert('Agregado con exito');
  }
</script>
</head>
<body class="interna2" OnContextMenu="return false" <?php if(isset($_GET['OK'])==1){ echo 'Onload="ok();"';}?>>
<?php
  
 include_once('../php/entities/movimientos.php');
  include_once('../php/dao/CuentaDAO.php');
  include_once('../php/entities/cuentas.php');
  include_once('../php/dao/MovimientosDAO.php');
  include_once('../php/dao/TercerosDAO.php');
  include_once('../php/dao/terceros.php');
  include_once('../php/entities/terceros.php');
 
$movimientos = new movimientos();
  $MovimientosDAO = new MovimientosDAO(); 
  $cuentasDAO = new CuentaDAO();
  $cuentas = new cuentas();
  $TercerosDAO = new TerceroDAO();
  $terceros = new terceros(); 
  $terceros = $TercerosDAO->getListC();
  $sal=$MovimientosDAO->saldo();
  $cuentas=$cuentasDAO->getList(5);
$movimientos = $MovimientosDAO->get_documento(5);
        $consecutivo= $movimientos->getNumdoc()+1;
    $fill = 4;//cantidad de digitos (si no se completan se rellanan con 0)
  echo str_pad($consecutivo, $fill, '0', STR_PAD_LEFT);//la magia
$view= new stdClass(); 
$view->disableLayout=false;

if ($view->disableLayout==false)
{
    include_once ('cuerpo/CajaMenor.php');
}

?>
</body>
</html>